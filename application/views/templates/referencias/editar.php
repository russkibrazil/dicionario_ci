<?php
    echo form_open('usuarios/criar'); 
?>

<label for="cod">Código de referência</label>
<input type="text" name="cod" size="10" value="<?php $referencia['cod']; ?>"><br>
<?php echo form_error('cod'); ?>

<label for="descricao">Descrição</label>
<input type="text" name="descricao" size="50" value="<?php $referencia['descricao']; ?>"><br>
<?php echo form_error('descricao'); ?>

<label for="autor">Autor</label>
<input type="text" name="autor" size="50" value="<?php $referencia['autor']; ?>"><br>
<?php echo form_error('autor'); ?>

<label for="ano">Ano</label>
<input type="text" name="ano" size="10" value="<?php $referencia['ano']; ?>"><br>
<?php echo form_error('ano'); ?>

<input type="submit" name="submit" value="Criar"> <a href="../">Cancelar</a>
</form>