<?php

/**
 *
 */
class Electeur extends Personne
{
  protected string $desk;
  protected bool $vote;

  public function __construct(string $lastname, string $firstname, string $desk, bool $vote)
  {
    $this->setDesk($desk);
    $this->setVote($vote);

    parent::__construct($lastname, $firstname);
  }

  public function setDesk(string $desk):self {
    $this->desk = $desk;
    return $this;
  }

  public function getDesk() {
    return $this->desk;
  }

  public function setVote(bool $vote):self {
    $this->vote = $vote;
    return $this;
  }

  public function getVote() {
    return $this->vote;
  }

  public function aVoter() {
    if ($this->getVote() == FALSE) {
      $this->setVote(TRUE);
      return $this->getLastname() . ' a voté';
    }
    else {
      return $this->getLastname() . ' a déjà voté';
    }
  }
}
