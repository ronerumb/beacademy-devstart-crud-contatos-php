<form class="p-3" method="post">
    <div>
        <h1 >Editar</h1>
        <label class="form-label">Nome</label>
        <input type="text" name="nome" value="<?php echo $dados[0]; ?>" class="form-control">
        <br>
        <label class="form-label">Email</label>
        <input type="email" name="email" value="<?php echo $dados[1]; ?>" class="form-control">       
        <br>
        <label class="form-label">Telefone</label>
        <input type="text"  name="tel" value="<?php echo $dados[2]; ?>" class="form-control">
        <br>
        <button class="btn btn-dark">Editar</button>
    </div>
</form>