<?php
$servername="localhost";
$username="root";
$password="";
$database="vscode";
$conn=mysqli_connect($servername,$username,$password,$database);
if ($_SERVER['REQUEST_METHOD']=='POST')
{
$id=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$sql="INSERT INTO `vscode` (`id`, `name`, `phone`, `age`)
 VALUES ('$id', '$name', '$phone', '$age')";
 $result=mysqli_query($conn,$sql);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>create database</title>
  </head>
  <body>
  <div class="container">
  <form action="bhanu14x/nilam/bhp/index.php" method="POST">
    <div class="container">
  <div class="mb-3">
    <label for="cng" class="form-label">id</label>
    <input type="text" class="form-control" id="cng" aria-describedby="idHelp" name="id">
</div>
<div class="mb-3">
    <label for="cng1" class="form-label">name</label>
    <input type="text" class="form-control" id="cng1" aria-describedby="idHelp" name="name">
</div>
<div class="mb-3">
    <label for="cng2" class="form-label">phone</label>
    <input type="text" class="form-control" id="cng2" aria-describedby="idHelp" name="phone">
</div>
<div class="mb-3">
    <label for="cng3" class="form-label">age</label>
    <input type="text" class="form-control" id="cng3" aria-describedby="idHelp" name="age">
</div>
<div class="container">
<button class="btn">submit</button>  
</div>
</div>
  </div>
  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">age</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql="SELECT * FROM `vscode`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
   echo" <tr>
      <th scope='row'></th>
      <td>".$row['id']."</td>
      <td>".$row['name']."</td>
      <td>".$row['phone']."</td>
      <td>".$row["age"]."</td>
    </tr>
    <tr>";
 
}
    ?>
  </tbody>
</table>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
