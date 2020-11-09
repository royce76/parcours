<?php

class Book {
  public string $title;
  public int $pages;

  public function __construct(array $data) {
    $this->setTitle($data["title"]);
    $this->setPages($data["pages"]);
  }

  public function setTitle(string $title) {
   $this->title = $title ;
  }

  public function getTitle():string {
    return $this->title;
  }

  public function setPages(int $pages) {
    $this->pages = $pages;
  }

  public function getPages() :int {
    return $this->pages;
  }
}
