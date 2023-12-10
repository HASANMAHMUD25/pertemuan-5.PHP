<!DOCTYPE HTML>  
<html>
<head>
<style>
   body {
    font-family: Arial, sans-serif;
    background-color: #4e7eff; /* Warna latar belakang biru */
    margin: 20px;
  }

  h2 {
    color: #333;
    text-align:center 
  }

  form {
    max-width: 600px;
    margin: 0 auto;
    background-color: aqua; /* Warna latar belakang aqua di dalam formulir */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  input[type="text"], textarea {
    width: 100%;
    padding: 8px;
    margin: 5px 0 20px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 4px;
  }

  input[type="radio"] {
    margin-right: 5px;
  }

  input[type="submit"] {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }

  .error {
    color: #FF0000;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  table, th, td {
    border: 1px solid #ddd;
  }

  th, td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #4caf50;
    color: white;
  }
</style>
</head>
<body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>HASAN MAHMUD</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="Perempuan">Perempuan
  <input type="radio" name="gender" value="Pria">Pria

  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// Display user input in a table
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<h2>Your Input:</h2>";
  echo "<table>";
  echo "<tr><th>Property</th><th>Value</th></tr>";
  echo "<tr><td>Name</td><td>$name</td></tr>";
  echo "<tr><td>Email</td><td>$email</td></tr>";
  echo "<tr><td>Website</td><td>$website</td></tr>";
  echo "<tr><td>Comment:</td><td>$comment</td></tr>";
  echo "<tr><td>Gender</td><td>$gender</td></tr>";
  echo "</table>";
}
?>

</body>
</html>