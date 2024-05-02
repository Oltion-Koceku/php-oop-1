<?php

class Movie{
  // dichiaro le variabili
  private $name ;
  private $minute ;
  private $year ;
  private $genere;


  public $autor;

  //con il construct do il valore alle variabili
  function __construct(string $_name, string $_minute, string $_year, Autore $_autor, array $_genere){
  
  $this -> setName($_name);
  $this -> setMinute($_minute);
  $this -> setYear($_year);
  $this -> getGenere($_genere);
  $this -> autor = $_autor;

  }
  // Funzioni per poter dare un valore alle variabili private

    public function setName($_name){
      $this -> name = $_name;
    }
    public function setMinute($_minute){
      $this -> minute = $_minute;
    }
    public function setYear($_year){
      $this -> year = $_year;
    }


    //funzione di compliazione film

    public function getFullFilm(){
      // scritto tutto attaccato, Implode invece prende un array di stringhe e le concatena insieme sepatando con un separatore che vuoi tu
      $genereDaStampare = implode("//// " , $this->genere);
      echo  "$this->name, $this->minute, $this->year, Generi: $genereDaStampare";
    }

    public function getGenere($_genere){
      $this->genere = $_genere;
    }

};