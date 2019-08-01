<?php
$bdServidor = 'localhost'; //endereço do servi- dor MySQL
$bdUsuario = 'sistematarefas'; //nome de usuario
$bdSenha = 'sistema'; //senha do usuario
$bdBanco = 'tarefas'; //nome do banco que queremos acessar

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

//A função mysqli_connect_errno() pega uma conexão e verifica se houve erros de conexão
if(mysqli_connect_errno($conexao)) {
  echo "Problemas para conectar ao banco, Verifique os dados e tento novamente.";
  die(); //a função die(), mata o programa ali mesmo, sem ler o código que existe mais para frente.
}

function buscar_tarefas($conexao) {
  $sqlBusca = 'SELECT * FROM tarefas';
  $resultado = mysqli_query($conexao, $sqlBusca);

  $tarefas = array();

  while($tarefa = mysqli_fetch_assoc($resultado)) {
    $tarefas[] = $tarefa;
  }

  return $tarefas;
}

function gravar_tarefa($conexao, $tarefa) {
  $sqlGravar = "INSERT INTO tarefas (nome, descricao, prioridade, prazo, concluida)
                VALUES
                (
                  '{$tarefa['nome']}',
                  '{$tarefa['descricao']}',
                  '{$tarefa['prioridade']}',
                  '{$tarefa['prazo']}',
                  '{$tarefa['concluida']}'
                )";
  mysqli_query($conexao, $sqlGravar);
}
?>
