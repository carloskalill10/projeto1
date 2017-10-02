<html>
<body>
<center> <h2> <b>Dados de pressão dos sensores </b> </h2> </center>



<?php
	$mysqli = new mysqli("localhost","root", "", "projeto1"); //connect on database;

	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
	$query= "select * from pressao order by data asc";
	$dados = $mysqli->query($query);
	echo "<center>";
	echo "<table border=1 width=40%>";
	echo "<tr>";
	echo "<td><b> id  </b> </td> ";
	echo "<td><b> tag </b> </td> ";
	echo "<td><b> valor </b> </td> ";
	echo "<td><b> data / hora </b> </td> ";
	echo "</tr>";

	while ($cadastro = $dados -> fetch_array ()) {

		echo "<tr>";
		echo "<td>".$cadastro ["id"]."</td>";
		echo "<td>".$cadastro ["tag"]."</td>";
		echo "<td>".$cadastro ["valor"]."</td>";
		echo "<td>".$cadastro ["data"]."</td>";	
		
	}
echo "</table>";
echo "</center>";
?>

</body>
</html>