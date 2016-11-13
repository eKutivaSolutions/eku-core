<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 18/08/2016
 * Hora: 14:11
 */

namespace eKutivaSolutions\Core\Traits\Model;


use Carbon\Carbon;

trait Person
{
    public function setBirthDayAttribute($value)
    {
        $this->attributes['birth_day'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function setDocValidationDateAttribute($value)
    {
        $this->attributes['doc_validation_date'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function getBirthDayAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getDocValidationDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getFullNameAttribute()
    {
        return $this->getAttribute('names') . ' ' . $this->getAttribute('surname');
    }

    public function getShortNameAttribute()
    {
        return display_name($this->getAttribute('full_name'));
    }
}