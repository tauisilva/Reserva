<h1>listar Sala</h1>
<?php
	$sql = "SELECT s.nome_sala, s.idsalas, f.nome_funcionario, h.dia_reserva, h.hora_inicial, h.hora_final
            FROM hora_reserva AS h
			INNER JOIN salas AS s
			ON s.idsalas = h.salas_idsalas
			INNER JOIN funcionario AS f
			ON f.idfuncionario = h.funcionario_idfuncionario";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Nome da sala</th>";
		print "<th>Nome do funcionario</th>";
		print "<th>Dia da reserva</th>";
        print "<th>hora reserva</th>";
        print "<th>Ação</th>";
		print "</tr>";
		
		while($row = $res->fetch_assoc()){
            print "<tr>";
			print "<td>".$row["nome_sala"]."</td>";
			print "<td>".$row["nome_funcionario"]."</td>";
			print "<td>".date('d/m/Y', strtotime($row['dia_reserva']))."</td>";
			print "<td>De ".$row["hora_inicial"]." até ".$row["hora_final"]."</td>";
			
            print "<td>
                <button onclick=\"location.href='index.php?page=edi-sala&idsalas=".$row["idsalas"]."';\" class='btn btn-success'>Editar</button>

                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-sala&acao=excluir&idsalas=".$row["idsalas"]."';}else{false;};\"  class='btn btn-danger'>Excluir</button>
            </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
        print "Não encontrei resultados";
	}
?>