<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 24/08/2016
 * Hora: 18:00
 */

namespace eKutivaSolutions\Core\Traits\Model;


trait HasCompany
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
     * Set company ID from the user modifying resource
     *
     * @return $this
     */

    public function setCompanyID()
    {
        return $this->setAttribute('company_id', auth()->user()->branch->company_id);
    }

    public function scopeSameCompany($query)
    {
        return $query->where('company_id', auth()->user()->branch->company_id);

    }
}