<?php

//En faisant l'exercice 7, on se rend compte que le code du formulaire
//doit être contenu dans un attibut qui est concatené.

class Form
{

  protected $formCode;

  public function __construct(string $action = "")
  {
    //on met les apostrophe pour les guillements si action est "".
    $this->formCode = "<form action='$action' method='POST'>";
  }

  public function setTexte(string $text = "input"):self
  {
    $this->formCode .= "<input type=text name='$text' id='$text'>";
    return $this;
  }

  public function setSubmit(string $submit = "submit", string $value = "valider"):self
  {
    $this->formCode .= "<input type=submit name='$submit' id='$submit' value='$value'></form>";
    return $this;
  }

  public function showForm()
  {
    return $this->formCode;
  }
}
