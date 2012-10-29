<?php

/**
 * BaseSirenaPrueba
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $JobeetJobs
 * @property Doctrine_Collection $JobeetAffiliates
 * @property Doctrine_Collection $SirenaPruebaAffiliate
 * 
 * @method string              getName()                  Returns the current record's "name" value
 * @method Doctrine_Collection getJobeetJobs()            Returns the current record's "JobeetJobs" collection
 * @method Doctrine_Collection getJobeetAffiliates()      Returns the current record's "JobeetAffiliates" collection
 * @method Doctrine_Collection getSirenaPruebaAffiliate() Returns the current record's "SirenaPruebaAffiliate" collection
 * @method SirenaPrueba        setName()                  Sets the current record's "name" value
 * @method SirenaPrueba        setJobeetJobs()            Sets the current record's "JobeetJobs" collection
 * @method SirenaPrueba        setJobeetAffiliates()      Sets the current record's "JobeetAffiliates" collection
 * @method SirenaPrueba        setSirenaPruebaAffiliate() Sets the current record's "SirenaPruebaAffiliate" collection
 * 
 * @package    sirenaPrueba
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSirenaPrueba extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sirena_prueba');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
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
             'refClass' => 'SirenaPruebaAffiliate',
             'local' => 'category_id',
             'foreign' => 'affiliate_id'));

        $this->hasMany('SirenaPruebaAffiliate', array(
             'local' => 'id',
             'foreign' => 'category_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}