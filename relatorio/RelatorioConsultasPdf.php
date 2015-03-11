<?php 
	include("fpdf/fpdf.php");
	require("../conectar.php");	

	$consultas = array();
	
	$logotipo = "../images/home_logo.png"; // Caminho da imagem
	$titulo = "Relatorio de Consultas";  // Título do relatorio
	$data=date("d/m/Y H:i:s"); 			//pegando data e hora da criação do PDF

	$pdf = new FPDF('P','cm','A4'); 	// (P = Retrato ou L = Paisagem; Tipo de medida, Tipo de pagina)
	$pdf->Open(); 						// Abrindo o FPDF
	$pdf->AddPage(); 					// Adicionando uma página
	$pdf-> SetFont('Arial','B',18); 	// Definindo fonte
	$pdf->Cell(13,1,$titulo,0,0, 'R');  // Incluindo uma célula

	$pdf->Image($logotipo,5,10,"png");  // Incluindo imagem

	$pdf->Ln(1); 						// Pulando linha
	$pdf-> SetFont('Arial','',12);
	$pdf -> Cell (5, 1, $data, 0,0); 	// Incluindo célula com a data

	$pdf->Ln(1);
	//*** MEU CABEÇALHO ***/
	$pdf -> Cell (1, 1, 'ID', 1,0,'C');
	$pdf -> Cell (11, 1, 'PACIENTE', 1,0,'C');
	$pdf -> Cell (3, 1, 'DATA', 1,0,'C');
	$pdf -> Cell (2, 1, 'HORA', 1,0,'C');
	$pdf -> Cell (2, 1, 'AT.', 1,1,'C');

	$resultado = mysqli_query($conexao, "SELECT c.id_consulta, p.nome, c.data_consulta, c.hora, c.atendida FROM consulta c JOIN paciente p ON (c.id_paciente = p.id_paciente) and c.atendida = ''") or die();

	while ($consulta = mysqli_fetch_assoc($resultado)) {
		array_push($consultas, $consulta);
		$pdf -> Cell (1, 1, $consulta['id_consulta'], 1,0,'C'); // Largura, Altura, Conteúdo, Borda (0-Não,1-Sim), Quebra Linha (0-Não,1-Sim), Alinhamento (L,C,R)
		$pdf -> Cell (11, 1, $consulta['nome'], 1,0,'L');
		$pdf -> Cell (3, 1, $consulta['data_consulta'], 1,0,'C');
		$pdf -> Cell (2, 1, $consulta['hora'], 1,0,'C');
		$pdf -> Cell (2, 1, $consulta['atendida'], 1,1,'C');
	}

	$pdf->Output(); // Fechamento do PDF
	
?>

