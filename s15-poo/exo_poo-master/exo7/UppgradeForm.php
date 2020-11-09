<?php
/**
 * UppgradeForm is a child from Form.
 */
class UppgradeForm extends Form
{

  public function __construct(string $action)
  {
    parent::__construct($action);
  }

  public function setRadios(array $radios):self
  {
    foreach ($radios as $key => $radio) {
      $this->formCode .=
      "<div>
      <input type='radio' id={$radio['value']} name={$radio['name']} value={$radio['value']}>
      <label for={$radio['value']}>{$radio['value']}</label>
      </div>";
    }
    return $this;
  }

  public function setCheckBox(array $checkBoxs):self
  {
    foreach ($checkBoxs as $key => $checkBox) {
      $this->formCode .=
      "<div>
      <input type='checkbox' id={$checkBox['value']} name={$checkBox['name']}>
      <label for={$checkBox['value']}>{$checkBox['value']}</label>
      </div>";
    }
    return $this;
  }

}
