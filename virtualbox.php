<!DOCTYPE html>
<html>
  <head>
    <title>virtualnibox</title>
    <style type="text/css">
      table {
        border-collapse: collapse;
        width: 100%;
        color: #d96459;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
      }
      th {
        background-color: #d96459;
        color: white;
      }
      tr:nth-child(even) {background-color: #f2f2f2}
    </style>
  </head>

  <body>
    <table>
      <tr>
        <th>id</th>
        <th>ime</th>
        <th>mail</th>
        <th>poruka</th>
      </tr>
    </table>
<?php
  $conn = mysqli_connect('localhost', 'root', '', 'ejlinipodaci');
    if($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
    }

    $sql = "SELECT id, ime, mail, poruka from ejlaupit";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
      echo "<table>";
      while($row = $result-> fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $field => $value) {
          echo "<td>" . $value . "</td>";        }
      }
      echo "</tr>";
      echo "</table>";
    }
    else {
      echo "0 result";
    }
    $conn-> close();
  ?>

  </body>

</html>
