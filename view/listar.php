<table class="table container">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ações</th>
      
    </tr>
  </thead>
  <tbody>
      <?php foreach($contatos as $posicao=> $contato){
          $partes = explode(';', $contato);?>
    <tr>
      <td><?php echo $partes[0]  ?> </td>
      <td><?php echo $partes[1]  ?> </td>
      <td><?php echo $partes[2]  ?> </td>
      <td> <a href="/excluir?id=<?php echo $posicao  ?>"> Excluir </a> </td>     
    </tr>

    <?php }  ?>
 
  </tbody>
</table>
