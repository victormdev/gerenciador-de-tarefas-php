<html>
  <head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Gerenciador de Tarefas</title>
    <style>
      h1 {
        text-align: center;
        margin-bottom: 40px;
      }
      .tabela {
        margin: 0 auto;
        width: 700px;
        /*text-align: center;*/
      }
      table th {
        text-align: center;
      }
      .descricao {
        width: 200px;
      }
    </style>
  </head>

  <body>

    <div class="container">
      <h1>Gerenciador de Tarefas</h1>

      <form class="tabela">

        <fieldset class="form-group">
          <legend>Nova Tarefa</legend>

          <label for="tarefa">Tarefa:</label>
          <input type="text" id="tarefa" name="nome" class="form-control">

          <label for="descricao" class="descri">Descrição (opicional):</label>
          <textarea id="descricao" name="descricao" class="form-control"></textarea>

          <label for="prazo">Prazo: (opicional):</label>
          <input type="text" id="prazo" name="prazo" class="form-control">

          <fieldset class="form-group">
            <legend>Prioridade:</legend>

            <input type="radio" id="baixa" name="prioridade" value="1" checked>
            <label for="baixa">Baixa</label>

            <input type="radio" id="media" name="prioridade" value="2">
            <label for="media">Média</label>

            <input type="radio" id="alta" name="prioridade" value="3">
            <label for="alta">Alta</label>

          </fieldset>

          <div class="form-group">
            <input type="checkbox" id="concluida" name="concluida" value="1">
            <label for="concluida">Tarefa Concluída</label>
          </div>

          <input type="submit" value="Cadastrar" class="btn btn-primary">
        </fieldset>
      </form>

     <table class="table table-striped tabela">
       <thead>
         <th>Tarefa</th>
         <th>Descrição</th>
         <th>Prazo</th>
         <th>Prioridade</th>
         <th>Concluída</th>
       </thead>
       <tbody>
         <?php foreach ($lista_tarefas as $tarefa) : ?>
           <tr>
             <td><?php echo $tarefa['nome']; ?></td>
             <td class="descricao"><?php echo $tarefa['descricao']; ?></td>
             <td><?php echo traduz_data_para_exibir($tarefa['prazo']); ?></td>
             <td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
             <td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
           </tr>
         <?php endforeach; ?>
       </tbody>
     </table>
    </div>

  </body>
</html>
