<?php
class Messagerie {
  private $idMessagerie;
  private $messages;
  private $utilisateur;

  public function __construct($idMessagerie, CompteUtilisateur $utilisateur) {
    $this->idMessagerie = $idMessagerie;
    $this->messages = array();
    $this->utilisateur = $utilisateur;
  }

  public function getIdMessagerie() {
    return $this->idMessagerie;
  }

  public function getMessages() {
    return $this->messages;
  }

  public function addMessage(Message $message) {
    array_push($this->messages, $message);
  }
}
?>
