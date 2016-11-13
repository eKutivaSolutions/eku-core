<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@ekutivasolutions / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 10/11/2016
 * Hora: 15:38
 */

namespace eKutivaSolutions\Core\Traits\Model;


trait ReadOnly
{
    /**
     * returns false on create
     * @method create
     *
     * @param  array $attributes
     *
     * @return false
     */
    static function create(array $attributes = [])
    {
        return false;
    }

    /**
     * returns false on forceCreate
     * @method forceCreate
     *
     * @param  array $attributes
     *
     * @return false
     */
    static function forceCreate(array $attributes)
    {
        return false;
    }

    /**
     * returns false on firstOrCreate
     * @method firstOrCreate
     *
     * @param  array $arr
     *
     * @return false
     */
    static function firstOrCreate(array $arr)
    {
        return false;
    }

    /**
     * returns false on firstOrNew
     * @method firstOrNew
     *
     * @param  array $arr
     *
     * @return false
     */
    static function firstOrNew(array $arr)
    {
        return false;
    }

    /**
     * returns false on destroy
     * @method destroy
     *
     * @param  mixed $ids
     *
     * @return false
     */
    static function destroy($ids)
    {
        return false;
    }

    /**
     * returns false on save
     * @method save
     *
     * @param  array $options
     *
     * @return false
     */
    public function save(array $options = [])
    {
        return false;
    }

    /**
     * returns false on update
     * @method update
     *
     * @param  [type] $attributes
     * @param  [type] $options
     *
     * @return false
     */
    public function update(array $attributes = [], array $options = [])
    {
        return false;
    }

    /**
     * returns false on delete
     * @method delete
     *
     * @return false
     */
    public function delete()
    {
        return false;
    }

    /**
     * returns false on restore
     * @method restore
     *
     * @return false
     */
    public function restore()
    {
        return false;
    }

    /**
     * returns false on forceDelete
     * @method forceDelete
     *
     * @return false
     */
    public function forceDelete()
    {
        return false;
    }
}