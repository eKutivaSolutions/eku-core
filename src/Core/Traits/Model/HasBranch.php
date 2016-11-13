<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 16/08/2016
 * Hora: 20:01
 */

namespace eKutivaSolutions\Core\Traits\Model;


use App\Branch;

trait HasBranch
{
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function scopeSameBranch($query)
    {
        $role = array_flatten(auth()->user()->getRoles());

        if (in_array($role[0], config('enums.all_terrain'))) return $query;

        return $query->where('branch_id', auth()->user()->branch_id);

    }
}