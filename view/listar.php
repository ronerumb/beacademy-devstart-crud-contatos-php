<table class="table container">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      
    </tr>
  </thead>
  <tbody>
      <?php foreach($contatos as $contato){
          $partes = explode(';', $contato);?>
    <tr>
      <td><?php echo $partes[0]  ?> </td>
      <td><?php echo $partes[1]  ?> </td>
      <td><?php echo $partes[2]  ?> </td>    
    </tr>

    <?php }  ?>
 
  </tbody>
</table>
