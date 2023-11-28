<?php

function login(){
   render('/user/login.php');
}

function loginError(){
   render('/user/login.php');
   echo "Veuillez ressayer";

}

function create()
{

   render('/user/create.php');
}

function newUser()
{
   require_once(MODEL_DIR . "/user.php");
   clientInsert();
  
}


function validation()
{
    require_once("models/user.php");
   auth();
  
}

