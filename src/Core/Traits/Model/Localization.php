<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 16/08/2016
 * Hora: 19:55
 */

namespace eKutivaSolutions\Core\Traits\Model;


trait Localization
{
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function nationality()
    {
        return $this->belongsTo('App\Country');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }
}