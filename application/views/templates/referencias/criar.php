<?php
    if ($salvo)
        echo "<div class=''> <h3>Item salvo!</h3> </div>";
    echo form_open('usuarios/criar'); 
?>

<label for="cod">Código de referência</label>
<input type="text" name="cod" size="10"><br>
<?php echo form_error('cod'); ?>

<label for="descricao">Descrição</label>
<input type="text" name="descricao" size="50"><br>
<?php echo form_error('descricao'); ?>

<label for="autor">Autor</label>
<input type="text" name="autor" size="50"><br>
<?php echo form_error('autor'); ?>

<label for="ano">Ano</label>
<input type="text" name="ano" size="10"><br>
<?php echo form_error('ano'); ?>

<input type="submit" name="submit" value="Criar"><a href="../">Cancelar</a>
</form>