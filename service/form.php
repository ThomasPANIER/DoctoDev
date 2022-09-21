<?php
// fonctions qui automatisent les inputs des formulaires et permet de réafficher une valeur déjà renseignée en cas d'erreur de validation.

function inputText($id){
  $value = isset($_POST[$id]) ? $_POST[$id] : '';
  return "<input class='form-control my-3 p-3' name='$id' id='$id' type='text' value='$value'>";
}

function inputDate($id){
  $value = isset($_POST[$id]) ? $_POST[$id] : '';
  return "<input class='form-control my-3 p-3' name='$id' id='$id' type='date' value='$value'>";
}

function inputDateTime($id){
  $value = isset($_POST[$id]) ? $_POST[$id] : '';
  return "<input class='form-control my-3 p-3' name='$id' id='$id' type='datetime-local' value='$value'>";
}

function inputTel($id){
  $value = isset($_POST[$id]) ? $_POST[$id] : '';
  return "<input class='form-control my-3 p-3' name='$id' id='$id' type='tel' value='$value'>";
}
function inputEmail($id){
  $value = isset($_POST[$id]) ? $_POST[$id] : '';
  return "<input class='form-control my-3 p-3' name='$id' id='$id' type='email' value='$value'>";
}
