<?php
include"header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<p style="color:blue; align:center;font-size:35px;">        Book avaliable list</p>
<div class="container">
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
          <th>Roll id</th>
        <th>Name</th>
        <th>Contact Number</th>
        <th>Book related to </th>
        <th>About book</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        
      <?php
$conn = mysqli_connect("localhost","id16424621_fxbooksseekers","q-lE?}}45bl?Grg~","id16424621_fxbookseekers");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,name,phnum,book,comment FROM book_records";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]."</td><td>". $row["name"]. "</td><td>" . $row["phnum"] . "</td><td>"
.$row["book"]."</td><td>".$row["comment"];
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

     
    </tbody>
  </table>
  
  </div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
<!DOCTYPE html>
</style>

<a href="reqbook.php" target="_blank">+Request Unavailable book</a>

<?php
include"footer.php";
?>
