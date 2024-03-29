<?php

/**
 * BasesfGuardGroupPermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $group_id
 * @property integer $permission_id
 * @property sfGuardGroup $Group
 * @property sfGuardPermission $Permission
 * 
 * @method integer                getstrtoupper('g')roupstrtoupper('i')d() Returns the current record's "group_id" value
 * @method integer                getstrtoupper('p')ermissionstrtoupper('i')d() Returns the current record's "permission_id" value
 * @method sfGuardGroup           getstrtoupper('G')roup() Returns the current record's "Group" value
 * @method sfGuardPermission      getstrtoupper('P')ermission() Returns the current record's "Permission" value
 * @method sfGuardGroupPermission setstrtoupper('g')roupstrtoupper('i')d() Sets the current record's "group_id" value
 * @method sfGuardGroupPermission setstrtoupper('p')ermissionstrtoupper('i')d() Sets the current record's "permission_id" value
 * @method sfGuardGroupPermission setstrtoupper('G')roup() Sets the current record's "Group" value
 * @method sfGuardGroupPermission setstrtoupper('P')ermission() Sets the current record's "Permission" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardGroupPermission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_group_permission');
        $this->hasColumn('group_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('permission_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardGroup as Group', array(
             'local' => 'group_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardPermission as Permission', array(
             'local' => 'permission_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}