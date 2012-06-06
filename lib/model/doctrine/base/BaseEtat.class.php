<?php

/**
 * BaseEtat
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nom
 * @property boolean $disponible
 * @property Doctrine_Collection $Stock
 * 
 * @method string              getNom()        Returns the current record's "nom" value
 * @method boolean             getDisponible() Returns the current record's "disponible" value
 * @method Doctrine_Collection getStock()      Returns the current record's "Stock" collection
 * @method Etat                setNom()        Sets the current record's "nom" value
 * @method Etat                setDisponible() Sets the current record's "disponible" value
 * @method Etat                setStock()      Sets the current record's "Stock" collection
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEtat extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('etat');
        $this->hasColumn('nom', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('disponible', 'boolean', null, array(
             'type' => 'boolean',
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Stock', array(
             'local' => 'id',
             'foreign' => 'etat_id'));
    }
}