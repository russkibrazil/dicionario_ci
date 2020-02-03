<?php
    if ($salvo)
        echo "<div class=''> <h3>Item salvo!</h3> </div>";
    echo validation_errors();
    echo form_open('equivalentes/criar'); 
?>

    <label for="equivalente">Lema Equivalente</label>
    <!-- <input type="text" name="equivalente" size="30" /><br /> -->
    <?php echo form_error('equivalente'); ?>

    <label for="napresentacao">Nº Apres.</label>
    <input type="number" name="napresentacao" size="10">
    <?php echo form_error('napresentacao'); ?>

    <input type="checkbox" name="heterogenerico" value="1" <?php echo set_checkbox('heterogenerico', '1'); ?> />
    <input type="checkbox" name="heterotonico" value="1" <?php echo set_checkbox('heterotonico', '1'); ?> />
    <input type="checkbox" name="heterossemantico" value="1" <?php echo set_checkbox('heterossemantico', '1'); ?> />

    <label for="exemplo">Exemplo</label>
    <input type="password" name="exemplo" size="50"><br />
    <?php echo form_error('exemplo'); ?>

    <label for="exemplot">Exemplo Traduzido</label>
    <input type="text" name="exemplot" size=50><br>
    <?php echo form_error('exemplot'); ?>

    <label for="marcauso">Marca de Uso</label>
    <input type="text" name="marcauso" size=50><br>
    <?php echo form_error('marcauso'); ?>

    <label for="notas_gramatica">Notas Gramaticais</label>
    <textarea name="notas_gramatica" cols="35" rows="5"></textarea>
    <?php echo form_error('notas_gramatica'); ?>

    <label for="notas_cultura">Notas Culturais</label>
    <textarea name="notas_cultura" cols="35" rows="5"></textarea>
    <?php echo form_error('notas_cultura'); ?>

    <input type="submit" name="submit" value="Criar" /><a href="../">Cancelar</a>
    
</form>