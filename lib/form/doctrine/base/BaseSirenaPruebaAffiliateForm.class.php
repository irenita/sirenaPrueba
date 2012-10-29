<?php

/**
 * SirenaPruebaAffiliate form base class.
 *
 * @method SirenaPruebaAffiliate getObject() Returns the current form's model object
 *
 * @package    sirenaPrueba
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSirenaPruebaAffiliateForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'category_id'  => new sfWidgetFormInputHidden(),
      'affiliate_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'category_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('category_id')), 'empty_value' => $this->getObject()->get('category_id'), 'required' => false)),
      'affiliate_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('affiliate_id')), 'empty_value' => $this->getObject()->get('affiliate_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sirena_prueba_affiliate[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SirenaPruebaAffiliate';
  }

}
