<?php
class Messagerie {
  private $idMessagerie;
  private $messages = array();

  public function getIdMessagerie() {
    return $this->IdMessagerie;
  }

  public function getMessages() {
    return $this->messages;
  }

  public function addMessage(Message $message) {
    array_push($this->messages, $message);
  }
}
?>
