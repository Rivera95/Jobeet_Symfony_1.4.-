<?php

/**
 * JobeetAffiliateTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class PluginJobeetAffiliateTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object JobeetAffiliateTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JobeetAffiliate');
    }

    public function countToBeActivated()
    {
        $q = $this->createQuery('a')
            ->where('a.is_active = ?', 0);

        return $q->count();
    }
}