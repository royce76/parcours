<?php

class ChatManager {

  private $db;

  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
  }

  public function getChats():array {
    $query = $this->db->query("SELECT name, age, sexe, color FROM chat");
    $chats = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($chats as $key => $chat) {
      // var_dump($chats[$key]);
      $chats[$key] = new Chat($chat);
    }
    return $chats;
  }

  public function addChat(Chat $chat) {
    $query = $this->db->prepare(
      "INSERT INTO chat(name, age, sexe, color)
      VALUES (:name, :age, :sexe, :color)"
    );
    $result = $query->execute([
      "name" => $chat->getName(),
      "age" => $chat->getAge(),
      "sexe" => $chat->getSexe(),
      "color" => $chat->getColor()
    ]);
    return $result;
    // return var_dump($chat);
    // echo "{$chat->getSexe()}";
  }
}
