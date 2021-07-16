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
  <form method="post" action="bookreqdb.php">
    
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="College enrollment Name...">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="phnum">Phone Number</label>
    <input type="text" id="phnum" name="phnum" placeholder="Your last Phone number..">

    
    <label for="subject">Subject:</label>
    <textarea id="subject" name="subject" placeholder="Write something about book /Author Name/Year of edition/Local author (or)Foregin author "style="height:200px"></textarea>
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
