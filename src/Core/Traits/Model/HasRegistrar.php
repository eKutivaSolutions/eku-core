<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 24/08/2016
 * Hora: 17:48
 */

namespace eKutivaSolutions\Core\Traits\Model;


use App\User;

trait HasRegistrar
{
    public function registrar()
    {
        return $this->belongsTo(User::class, 'registrar_id');
    }

    /**
     * Set Resourse updater ID
     *
     * @return $this
     */
    public function setRegistrarID()
    {
        return $this->setAttribute('registrar_id', auth()->user()->id);
    }

    public function scopeBelongsToMe($query, $registrarId = null)
    {
        if (!$registrarId) {
            $registrarId = currentUser()->id;
        }

        $role = array_flatten(currentUser()->getRoles());

        if (in_array($role[0], config('enums.all_terrain'))) return $query;

        return $query->where('registrar_id', $registrarId);
    }

}