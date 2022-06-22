<?php
class AllUserData
{
  private $editor;
  private $immagini;
  private $testo;
  private $cellulare;
  private $email;
  private $password;
  private $checkbox;
  private $radiobutton;
  private $true;
  private $false;
  private $link;
  private $mappa;
  private $messaggio;
  private $utente;
  private $ora;
  
  public function __construct($editor, $immagini, $testo, $cellulare, $email, $password, $checkbox, $radiobutton, $true, $false, $link, $mappa, $messaggio, $utente, $ora)
  {
    $this->editor = $editor;
    $this->immagini = $immagini;
    $this->testo = $testo;
    $this->cellulare = $cellulare;
    $this->email = $email;
    $this->password = $password;
    $this->checkbox = $checkbox;
    $this->radiobutton = $radiobutton;
    $this->true = $true;
    $this->false = $false;
    $this->link = $link;
    $this->mappa = $mappa;
    $this->messaggio = $messaggio;
    $this->utente = $utente;
    $this->ora = $ora;

  }
 
  public function getEditor()
  {
    return $this->editor;
  }
 
  public function getImmagini()
  {
    return $this->immagini;
  }
 
  public function getTesto()
  {
    return $this->testo;
  }
  public function getCellulare()
  {
    return $this->cellulare;
  }
 
  public function getEmail()
  {
    return $this->email;
  }
 
  public function getPassword()
  {
    return $this->password;
  }
  public function getCheckbox()
  {
    return $this->checkbox;
  }
 
  public function getRadiobutton()
  {
    return $this->radiobutton;
  }
 
  public function getTrue()
  {
    return $this->true;
  }
  public function getFalse()
  {
    return $this->false;
  }
 
  public function getLink()
  {
    return $this->link;
  }
 
  public function getMappa()
  {
    return $this->mappa;
  }
  public function getMessaggio()
  {
    return $this->messaggio;
  }
 
  public function getUtente()
  {
    return $this->utente;
  }
  public function getOra()
  {
    return $this->ora;
  }

}
?>