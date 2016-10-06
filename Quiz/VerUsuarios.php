<?php

$link = mysqli_connect();

$usuarios = mysqli_query();

	echo '<table border = 1> <tr>
			<th>DNI</th>
			<th>Nombre</th>
			</tr>';
			
		while($row = mysql_fetch_array($usuarios)){
			echo '<tr><td>'.$row['nombre'].'</td>
					  <td>'.$row['apellidos'].'</td>
					  <td>'.$row['nick'].'</td>
					  <td>'.$row['mail'].'</td>
					  <td>'.$row['telf'].'</td>
					  <td>'.$row['sexo'].'</td>
					  <td>'.$row['esp'].'</td></tr>';
			
		}
		echo '</table>';
		
		$usuarios->close();
		
		mysqli_close($link);
	
?>