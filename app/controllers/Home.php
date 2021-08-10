<?php 

class Home {

  function index (Request $req){
    
 
    return view('home');
  }

  function contact (){
    echo 'hell contact';  
    return view('contact','hiche');
  }
}