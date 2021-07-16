
  
   <?php 
include 'header.php';
?><script>
    setTimeout(function(){  history.back(); }, 10000);
</script>

<?php
  $id = $_POST['id'];
 $name = $_POST['name'];
 $phnum = $_POST['phnum'];
 $book = $_POST['book'];
 $comment = $_POST['comment'];
 

 if (!empty($id) && !empty($name)  && !empty($phnum) && !empty($book) && !empty($comment)  ) {
     $host = "localhost";
    $dbUsername = "id16424621_fxbooksseekers";
    $dbPassword = "q-lE?}}45bl?Grg~";
    $dbname = "id16424621_fxbookseekers";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT into book_records(id,name,phnum,book,comment)values('$id','$name','$phnum','$book','$comment')";
     //Prepare statement
     $sql = mysqli_query($conn, $INSERT);
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } 
    else {
//   echo "Error: " . $sql . "<br>" . $query . "<br>" .$conn->error;
    echo " 
    <p align='center'> <font color=green size='6pt'>New record   created successfully,Thanks for being good book donor</p>";

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


