<?php

/**
 * BasesfGuardUserPermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $permission_id
 * @property sfGuardUser $User
 * @property sfGuardPermission $Permission
 * 
 * @method integer               getstrtoupper('u')serstrtoupper('i')d() Returns the current record's "user_id" value
 * @method integer               getstrtoupper('p')ermissionstrtoupper('i')d() Returns the current record's "permission_id" value
 * @method sfGuardUser           getstrtoupper('U')ser() Returns the current record's "User" value
 * @method sfGuardPermission     getstrtoupper('P')ermission() Returns the current record's "Permission" value
 * @method sfGuardUserPermission setstrtoupper('u')serstrtoupper('i')d() Sets the current record's "user_id" value
 * @method sfGuardUserPermission setstrtoupper('p')ermissionstrtoupper('i')d() Sets the current record's "permission_id" value
 * @method sfGuardUserPermission setstrtoupper('U')ser() Sets the current record's "User" value
 * @method sfGuardUserPermission setstrtoupper('P')ermission() Sets the current record's "Permission" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasesfGuardUserPermission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_user_permission');
        $this->hasColumn('user_id', 'integer', null, array(
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
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
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