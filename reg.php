<!DOCTYPE html>
 <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
}?>

<?php
include"header.php"
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Book Donation  Form</h3>

<div class="container">
  <form method="post" action="bookreg.php">
    
    <label for="id">College enrollment id</label>
    <input type="text" id="id" name="id" placeholder="College enrollment id..">

    <label for="name">First Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="phnum">Phone Number</label>
    <input type="text" id="phnum" name="phnum" placeholder="Your last Phone number..">

    <label for="book">Book realated to </label>
    <select id="book" name="book">
      <option value="cs">CSE/IT/MCA </option>
      <option value="mech">MECH</option>
      <option value="eee">EEE</option>
      <option value="ece">ECE</option>
      <option value="eng">English</option>
      <option value="civil">CIVIL</option>
        <option value="math">Maths</option>
        <option value="chem/phy">Chem/Phy</option>
    </select>
    

    <label for="comment">Subject:</label>
    <textarea id="comment" name="comment" placeholder="Write something about book /Author Name/Year of edition/Local author (or)Foregin author "style="height:200px"></textarea>
    <br>
 <br>
 <br>
 <br><br>
  <input type="submit">
</form>
 <br>
 <br>

</body>
</html>
