<?php

  $obj = new main();
  $text = "Divya";
  
  $obj->string1 ($text);
  $obj->string2($text);
  $obj->string3($text);
  $obj->string4($text);
  $obj->string5($text);
  $obj->string6($text);
  $obj->string7($text);
  $obj->string8($text);
  $obj->string9($text);
  $obj->string10($text);
  $obj->array1($text);
  $obj->array2($text);
  $obj->array3($text);
  $obj->array4($text);
  $obj->array5($text);
  $obj->array6($text);
  $obj->array7($text);
  $obj->array8($text);
  $obj->array9($text);
  $obj->array10($text);
   
  class main {

    public function __construct() {

      echo '<h1> STRING AND ARRAY ASSIGNMENT </h1></br>';

    }
      
	  public function string1($tag) {
      echo '<h1> STRING FUNCTION 1 : str_split </h1>';
      $arr1 = str_split($tag);
      print_r ($arr1);	  
      echo '<hr>';
    }
	
	 public function string2($tag) {
      echo '<h1>STRING FUNCTION 2 : strtolower </h1>';
      echo '<h2> POSITION OF THE STRING is: </h2>' ." " .strtolower($tag);
      echo '<hr>';
    }
	
	  public function string3($tag) {
      echo '<h1>STRING FUNCTION 3 : strlen </h1>';
      echo '<h2> The length of the STRING is: </h2>' ." " .strlen($tag);
      echo '<hr>';
    }
     
	 public function string4($tag) {
      echo '<h1>STRING FUNCTION 4 : strrev </h1>';
      echo '<h2> REVERSE OF the STRING is: </h2>' ." " .strrev($tag);
      echo '<hr>';
    }
	
	  public function string5($tag) {
      echo '<h1>STRING FUNCTION 5 : str_word_count </h1>';
      echo '<h2> The word count of the STRING is: </h2>' ." " .str_word_count($tag);
      echo '<hr>';
    }
	
	  public function string6($tag) {
      echo '<h1>STRING FUNCTION 6 : strtoupper </h1>';
      echo '<h2> UPPER CASE OF the STRING is: </h2>' ." " .strtoupper($tag);
      echo '<hr>';
    }
	
	  public function string7($tag) {
      echo '<h1>STRING FUNCTION 7 : str_repeat </h1>';
      echo '<h2> Repeat THE STRING is: </h2>' ." " .str_repeat($tag, 2);
      echo '<hr>';
    }
	
	  public function string8($tag) {
      echo '<h1>STRING FUNCTION 8 : substr </h1>';
      echo '<h2> The substr is: </h2>' ." " .substr($tag, -2);
      echo '<hr>';
    }
	
	  public function string9($tag) {
      echo '<h1>STRING FUNCTION 9 : str_pad </h1>';
      echo '<h2> Repeat THE STRING is: </h2>' ." " .str_pad($tag,  10, "!");
      echo '<hr>';
    }
	
	  public function string10($tag) {
      echo '<h1>STRING FUNCTION 10 : strpos </h1>';
      echo strpos("Divya Gandhi", "Gandhi");
      echo '<hr>';
    }	

      public function array1($tag) {
      echo '<h1> ARRAY FUNCTION 1 : array_change_key_case </h1>';
      $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
      print_r(array_change_key_case($age,CASE_UPPER));
      echo '<hr>';
    }
	
	  public function array2($tag) {
      echo '<h1> ARRAY FUNCTION 2 : array_chunk </h1>';
      $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
      print_r(array_chunk($cars,2));
      echo '<hr>';
    }
	
	  public function array3($tag) {
      echo '<h1> ARRAY FUNCTION 3 : array_count_values </h1>';
      $a=array("A","Cat","Dog","A","Dog");
      print_r(array_count_values($a));
      echo '<hr>';
    }
	
	  public function array4($tag) {
      echo '<h1> ARRAY FUNCTION 4 : array_intersect </h1>';
      $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
      $a2=array("e"=>"red","f"=>"green","g"=>"blue");

      $result=array_intersect($a1,$a2);
      print_r($result);
      echo '<hr>';
    }
	
      public function array5($tag) {
      echo '<h1> ARRAY FUNCTION 5 : array_flip </h1>';
      $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	  $result=array_flip($a1);
      print_r($result);
      echo '<hr>';
    }
    
	
	  public function array6($tag) {
      echo '<h1> ARRAY FUNCTION 6 : array_keys </h1>';
      $a=array("Volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander");
      print_r(array_keys($a));
      echo '<hr>';
    }
    
	
	  public function array7($tag) {
      echo '<h1> ARRAY FUNCTION 7 : array_pad </h1>';
      $a=array("red","green");
      print_r(array_pad($a,5,"blue"));
      echo '<hr>';
    }
    
	
	  public function array8($tag) {
      echo '<h1> ARRAY FUNCTION 8 : array_pop </h1>';
      $a=array("red","green","blue");
      array_pop($a);
      print_r($a);
      echo '<hr>';
    }
    
	
      public function array9($tag) {
      echo '<h1> ARRAY FUNCTION 9 : array_replace </h1>';
      $a1=array("red", "green");
      $a2=array("blue", "yellow");
      print_r(array_replace($a1, $a2));
      echo '<hr>';
    }
    
	
	  public function array10($tag) {
      echo '<h1> ARRAY FUNCTION 10 : array_sum </h1>';
      $a=array(5,15,25);
      echo array_sum($a);
      echo '<hr>';
    }
	    
    public function __destruct() {

      echo '</br> I am done with the assignment';

    }
  }

?>