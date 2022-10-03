<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form File</title>
</head>
<body>

<?php

  echo  $_GET['user_name'];

?>

<form  action="../forms/form.php"  method="post">

<div>
  <label  for="nom">Nom :</label>
  <input  type="text"  id="nom"  name="user_name">
</div>

<div>
  <label  for="courriel">Courriel :</label>
    <input  type="email"  id="courriel"  name="user_email">
</div>

<div>
  <label  for="message">Message :</label>
  <textarea  id="message"  name="user_message"></textarea>
</div>

<div  class="button">
  <button  type="submit">Envoyer votre message</button>
</div>

</form>
</body>
</html>

Test for git connection



