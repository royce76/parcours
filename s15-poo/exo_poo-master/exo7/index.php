<?php
require 'Form.php';
require 'UppgradeForm.php';

$uppgradeForm = new UppgradeForm("");
$uppgradeForm->setTexte("name");
$uppgradeForm->setRadios([["name" => "radio", "value" => "radione"],["name" => "radio", "value" => "radiotwo"]]);
$uppgradeForm->setCheckBox([["name" => "checkone", "value" => "ferrari"],["name" => "checktwo", "value" => "fiat"]]);
$uppgradeForm->setSubmit("form", "envoyer");


echo $uppgradeForm->showForm();
