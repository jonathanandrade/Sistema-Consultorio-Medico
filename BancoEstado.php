 <?php
	require_once('conectar.php');

	function listaEstados($conexao) {
		$estados = array();
		$resultado = mysqli_query($conexao, "select * from estado");

		while($estado = mysqli_fetch_assoc($resultado)) {
			array_push($estados, $estado);			
		}	

		return $estados;
	}	

?>