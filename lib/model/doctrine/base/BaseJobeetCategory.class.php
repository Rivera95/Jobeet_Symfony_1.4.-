<?php

/**
 * BaseJobeetCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $JobeetJobs
 * @property Doctrine_Collection $JobeetAffiliates
 * @property Doctrine_Collection $JobeetCategoryAffiliate
 * 
 * @method string              getstrtoupper('n')ame()      Returns the current record's "name" value
 * @method Doctrine_Collection getstrtoupper('J')obeetJobs() Returns the current record's "JobeetJobs" collection
 * @method Doctrine_Collection getstrtoupper('J')obeetAffiliates() Returns the current record's "JobeetAffiliates" collection
 * @method Doctrine_Collection getstrtoupper('J')obeetCategoryAffiliate() Returns the current record's "JobeetCategoryAffiliate" collection
 * @method JobeetCategory      setstrtoupper('n')ame()      Sets the current record's "name" value
 * @method JobeetCategory      setstrtoupper('J')obeetJobs() Sets the current record's "JobeetJobs" collection
 * @method JobeetCategory      setstrtoupper('J')obeetAffiliates() Sets the current record's "JobeetAffiliates" collection
 * @method JobeetCategory      setstrtoupper('J')obeetCategoryAffiliate() Sets the current record's "JobeetCategoryAffiliate" collection
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobeetCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobeet_category');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('JobeetJob as JobeetJobs', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $this->hasMany('JobeetAffiliate as JobeetAffiliates', array(
             'refClass' => 'JobeetCategoryAffiliate',
             'local' => 'category_id',
             'foreign' => 'affiliate_id'));

        $this->hasMany('JobeetCategoryAffiliate', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggable0);
    }
}