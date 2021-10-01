<?php
$CantidadMostrar=3;
//Conexion  al servidor mysql
$conetar = new mysqli("localhost", "root", "", "dbblog");
if ($conetar->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conetar->connect_errno . ") " . $conetar->connect_error;
}else{
     // Validado  la variable GET
    $compag         =(int)(!isset($_GET['pag'])) ? 1 : $_GET['pag']; 
	$TotalReg       =$conetar->query("SELECT * FROM scrolltable");
	//Se divide la cantidad de registro de la BD con la cantidad a mostrar 
	$TotalRegistro  =ceil($TotalReg->num_rows/$CantidadMostrar);
	 //Operacion matematica para mostrar los siquientes datos.
	$IncrimentNum =(($compag +1)<=$TotalRegistro)?($compag +1):0;
	//Consulta SQL
	$consultavistas ="SELECT
				scrolltable.idscroll,
				scrolltable.titulo,
				scrolltable.imagen,
				scrolltable.descripcion
				FROM
				scrolltable
				ORDER BY
				scrolltable.idscroll ASC LIMIT ".(($compag-1)*$CantidadMostrar)." , ".$CantidadMostrar;
	$consulta=$conetar->query($consultavistas);
	while ($lista=$consulta->fetch_row()) {
		 echo "<div class=\"pagdes\">";
	     echo "<a href=\"\"><img src=".$lista[2].">";
	     echo "<h2>". utf8_encode($lista[1])."</h2></a>";
	     echo "</div>";
		 echo "<table class='table table-striped'>";
    	 echo "<thead>";
         echo "<tr>";
		 echo "<th style='width:60px;'><a href='controller/scrollController.php?action=actualizar&idscroll='.$lista[0].'>Editar</a></th>";
         echo "<th style='width:60px;'><a onclick='javascript:return confirm('¿Seguro de eliminar este registro?');' href='scrollmodel.php?action=eliminar&idscroll='.$lista[0].'>Eliminar</a></th>";
		 echo "</tr>";
    	 echo "</thead>";
		 echo "</table><br/><br/>";
	}
	//Validmos el incrementador par que no genere error
	//de consulta.  
    if($IncrimentNum<=0){}else {
	echo "<a href=\"pscroll.php?pag=".$IncrimentNum."\">Seguiente</a>";
	}
}
?>