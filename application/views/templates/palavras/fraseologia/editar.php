<?php
    echo validation_errors();
    echo form_open('fraseologia/editar'); 
?>

    <label for="fraseorig">Frase Original</label>
    <input type="text" name="fraseorig" size="30" value="<?php echo $fraseologia['FraseOrig'];?>"/><br />
    <?php echo form_error('fraseorig'); ?>

    <label for="fraseequiv">Frase Equivalente</label>
    <input type="text" name="fraseequiv" size="30" value="<?php echo $fraseologia['FraseEquiv'];?>"><br />
    <?php echo form_error('fraseequiv'); ?>

    <label for="categoria">Categoria</label>
    <?php 
        $options = array('I' => 'Exp. Idiomática', 'C' => 'Uso Comum');
        echo form_dropdown('categoria',$options,$fraseologia['Categoria']);
        echo "<br>";
        echo form_error('categoria'); 
    ?>
    
    <label for="exemploorig">Exemplo Original</label>
    <input type="text" name="exemploorig" size="30" value="<?php echo $fraseologia['ExemploOrig'];?>"><br />
    <?php echo form_error('exemploorig'); ?>
    
    <label for="exemploequiv">Exemplo Equivalente</label>
    <input type="text" name="exemploequiv" size="30" value="<?php echo $fraseologia['ExemploEquiv'];?>"><br />
    <?php echo form_error('exemploequiv'); ?>
    
    <label for="notas_gramatica">Notas Gramaticais</label>
    <textarea name="notas_gramatica" cols="35" rows="5" value="<?php echo $fraseologia['NotasGramatica'];?>"></textarea>
    <?php echo form_error('notas_gramatica'); ?>

    <label for="notas_cultura">Notas Culturais</label>
    <textarea name="notas_cultura" cols="35" rows="5" value="<?php echo $fraseologia['NotasCultura'];?>"></textarea>
    <?php echo form_error('notas_cultura'); ?>

    <input type="submit" name="submit" value="Salvar" /><a href="../">Cancelar</a>
    
</form>