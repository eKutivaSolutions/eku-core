<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@ekutivasolutions / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 24/10/2016
 * Hora: 14:36
 */

namespace eKutivaSolutions\Core\Traits\Model;


trait NameTrait
{
    public function getShortNameAttribute()
    {
        $names = explode(' ', $this->getAttribute('name'));

        return $names[0] . ' ' . array_pop($names);
    }
}