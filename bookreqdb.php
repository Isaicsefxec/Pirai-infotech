
  
   <?php 
include 'header.php';
?><script>
    setTimeout(function(){  history.back(); }, 10000);
</script>

<?php
  $name= $_POST['name'];
 $email= $_POST['email'];
 $phnum= $_POST['phnum'];
 $subject= $_POST['subject'];
 

 if (!empty($name) && !empty($email)  && !empty($phnum) && !empty($subject) ) {
     $host = "localhost";
    $dbUsername = "id16424621_fxbooksseekers";
    $dbPassword = "q-lE?}}45bl?Grg~";
    $dbname = "id16424621_fxbookseekers";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT into book_request(name,email,phnum,subject)values('$name','$email','$phnum','$subject')";
     //Prepare statement
     $sql = mysqli_query($conn, $INSERT);
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } 
    else {
//   echo "Error: " . $sql . "<br>" . $query . "<br>" .$conn->error;
    echo " 
    <p align='center'> <font color=green size='6pt'>New record   created successfully,Thanks for requesting for new books</p>";

    }
    mysqli_close($conn);
    }
}
 else {
 echo "All field are required";
 die();
}
?>
<img src="bookdonation.jpg" alt="Girl in a jacket" width="259" height="300">


