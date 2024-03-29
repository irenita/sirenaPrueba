<?php

/**
 * SirenaPrueba form base class.
 *
 * @method SirenaPrueba getObject() Returns the current form's model object
 *
 * @package    sirenaPrueba
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSirenaPruebaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'name'                   => new sfWidgetFormInputText(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
      'jobeet_affiliates_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'JobeetAffiliate')),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                   => new sfValidatorString(array('max_length' => 255)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
      'jobeet_affiliates_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'JobeetAffiliate', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'SirenaPrueba', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('sirena_prueba[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SirenaPrueba';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['jobeet_affiliates_list']))
    {
      $this->setDefault('jobeet_affiliates_list', $this->object->JobeetAffiliates->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveJobeetAffiliatesList($con);

    parent::doSave($con);
  }

  public function saveJobeetAffiliatesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['jobeet_affiliates_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->JobeetAffiliates->getPrimaryKeys();
    $values = $this->getValue('jobeet_affiliates_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('JobeetAffiliates', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('JobeetAffiliates', array_values($link));
    }
  }

}
