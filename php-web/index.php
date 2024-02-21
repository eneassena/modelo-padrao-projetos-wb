<?php

use Src\Models\User;

require __DIR__ . '/vendor/autoload.php';



$newUser = new stdClass;
$newUser->first_name = "Letícia Isis da Mata";
$newUser->last_name = "Mata";
$newUser->phone = "(17) 3685-3015";
$newUser->user_type = "client";
$newUser->login = "leciciamata123";
$newUser->password = "leciciamata123";

// $objectUser = (new User)->register_client($newUser);
// if(!$objectUser->fail()) {
//   var_dump($objectUser->data());
// }

// $objectUser = (new User)->findById(4);
// $objectUser->login = $newUser->login;
// $objectUser->password = password_hash($newUser->login, 
//   PASSWORD_DEFAULT, [10]);

// $objectUser->save();
// if(!$objectUser->fail()) {
//   var_dump($objectUser->data());
// }
var_dump(password_verify("jose1234", $objectUser->password));
