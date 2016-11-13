<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@ekutivasolutions / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 27/09/2016
 * Hora: 02:26
 */

namespace eKutivaSolutions\Core\Traits\Model;


trait CodeSequenciable
{
    public function getFakeCodeAttribute()
    {
        $code = $this->generateFakeCode();

        return $code;
    }

    protected function generateFakeCode()
    {
        return $this->created_at->format('Ym') . str_pad($this->id, 14, '0', STR_PAD_LEFT);
    }
}