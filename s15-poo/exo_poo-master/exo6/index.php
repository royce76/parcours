<?php
require 'Chat.php';
require 'ChatManager.php';

$chatmanager = new ChatManager();


if (isset($_POST["save_chat"])) {
  $empty_form = array_filter($_POST);
  if (count($empty_form) === count($_POST)) {
    $chat = new Chat($_POST);
    var_dump($chat);
    $chatmanager->addChat($chat);
  }
  else {
    echo "<p>HOP HOP HOP faut remplir tous les champs</p>";
  }
}

$chats = $chatmanager->getChats();

include "indexView.php";
