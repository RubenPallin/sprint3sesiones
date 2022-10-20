<?php
     $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
	<head>
		<style>
			table{
			      width: 100%;
			      background: #E74C3C;
				}
			th{
		           background: #800000;
				{
		</style>
	</head>
    <body>
	<h1>Conexión establecida</h1>
	<?php
	  // Lanzar una query
	  $query = 'SELECT * FROM tJuegos';
	  $result = mysqli_query($db, $query) or die('Query error');

          echo"<table border='1'>
	 	 <tr>
	     	 	<th>Id</th>
	     	        <th>Nombre</th>
 	            	<th>URL_imagen</th>
	     		<th>Año_salida</th>
             		<th>Temática</th>
	 	 </tr>";
	  // Recorrer el resultado
	  while ($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>" .$row['id']. "</td>";
		echo "<td>" .$row['nombre']. "</td>";
		echo "<td><a href='/detail.php?juego_id=$row[id]'><img width =50%  src='$row[url_imagen]'/></a></td>";
		echo "<td>" .$row['año_salida']. "</td>";
		echo "<td>" .$row['tematica']. "</td>";
		echo "</tr>";
	  }
		echo"</table>";
	 ?>
    </body>
</html>
