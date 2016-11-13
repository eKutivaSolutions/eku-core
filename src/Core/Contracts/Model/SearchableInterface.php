<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 24/08/2016
 * Hora: 18:35
 */

namespace eKutivaSolutions\Core\Contracts\Model;


interface SearchableInterface
{
    public function scopeSearch($query, $keyword);
}