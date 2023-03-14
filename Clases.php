<?php
/*
class Dog {
    public $name;
  
    public function bark() {
      echo $this->name . ' barked!';
    }
  }
  

  $roger = new Dog();
  $roger->name = 'Roger';
  $roger->bark();
    
  echo '<pre>'; //Mas estetico
  print_r($name); //Imprime variable
*/
  //Metodo Constructor
  class Dog {
    public string $name;
  
      public function __construct($name) {
          $this->name = $name; //Crea objeto $name = name
    }
  
    public function bark() {
      echo $this->name . ' barked!'; //LLama el objeto con $This
    }
  }
  
  $roger = new Dog('Roger');
  $roger->name; //'Roger'
  $roger->bark(); //'Roger barked!'


?>