<?php


// cu64979_db cu64979_dbPass

$sn = "localhost";
$un = "cu64979_db";
$p = "cu64979_dbPass";
$db = "cu64979_db";

$conn = new mysqli($sn, $un, $p, $db);
$conn = new mysqli($sn, $un, $p, $db);
$sql = "SELECT * FROM orders ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="php.css">
  <title>Заявки</title>
</head>
<body>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>E-mail</th>
  </tr>
  <?
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '</tr>';
      }
    }
  ?>
</table>
</body>
</html>
<?


$conn->close();
?>