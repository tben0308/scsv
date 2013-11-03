<html>
<head>

<title>SoCal Sports Video User Login</title>
</head>
<body>
<table border = 0>
<tr>
<td colspan=2 align=center>
<font face="Boston Traffic" style="font-size: 24px;"><font style="font-size: 42px;">SoCal Sports Video-Photography</font> </font><p><br />
</td>
</tr>

</table>


<?php

// create short variables
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$email = $_POST['email'];


echo "<h2>Welcome to the list: $firstName $lastName </h2>";
echo "<p>We will e-mail you at: $email</p>";
echo date('H:i, jS F Y');


@ $db = new mysqli('localhost', 'socalsp2_tom', 'warth0gs', 'socalsp2_soCalSports');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  $query = "select * from person";
  $result = $db->query($query);

  $num_results = $result->num_rows;

  echo "<p>Number of players found: ".$num_results."</p>";

  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<p><strong>".($i+1).". : ";
     echo stripslashes($row['firstname'])." ".htmlspecialchars(stripslashes($row['lastname']));
     echo "</strong><br />Email: ";
     echo stripslashes($row['email1']);
     echo "<br />Phone: ";
     echo stripslashes($row['home_phone']);
     echo "<br />Address: ";
     echo stripslashes($row['home_address']);
     echo "<br />";
     echo stripslashes($row['home_city']);
echo ", ";
     echo stripslashes($row['home_state']);
echo " ";
     echo stripslashes($row['home_zipcode']);
     echo "</p>";
  }

  $result->free();
  $db->close();

?>




</body>
</html>

