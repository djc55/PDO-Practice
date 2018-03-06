<?php
require 'db.php' ;
$sql = "select id,email,fname,lname,phone,birthday,gender,password from djc55.accounts where id < 6";
$results = runQuery($sql);
echo count($results) . " Results:";
if(count($results) > 0)
{
	echo "<table border=\"1\"> <tr> <th>ID</th> <th>Email</th> <th>First Name</th> <th>Last Name</th> <th>Phone</th> <th>Birthday</th> <th>Gender</th> <th>Password</th>  </tr>";
	foreach ($results as $row) {
		echo "<tr> <td>".$row["id"]."</td> <td>".$row["email"]."</td> <td>".$row["fname"]."</td> <td>".$row["lname"]."</td> <td>".$row["phone"]."</td> <td>".$row["birthday"]."</td> <td>".$row["gender"]."</td> <td>".$row["password"]."</td> </tr>";
	}
	
}else{
    echo '0 results';
}
$rows = mysql_num_rows($results);
echo $rows;
?>