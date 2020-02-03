<?php
    if ($salvo)
        echo "<div class=''> <h3>Item salvo!</h3> </div>";
    echo validation_errors();
    echo form_open('pages/palavra/criar'); 
?>
<label for="lema">Lema</label>
<input type="text" name="lema" size="35">
<?php echo form_error('lema'); ?>

<label for="sublema">Sublema</label>
<input type="text" name="sublema" size="35">
<?php echo form_error('sublema'); ?>

<label for="classe_gramatical">Classe Gramatical</label>
<?php 
    $options = array(
        'Artigo' => 'Artigo',
        'Substantivo' => 'Substantivo',
        'Adjetivo' => 'Adjetivo',
        'Advérbio' => 'Advérbio',
        'Preposição' => 'Preposição',
        'Conjunção' => 'Conjunção',
        'Interjeição' => 'Interjeição',
        'Pronome' => 'Pronome',
        'Verbo' => 'Verbo',
        'Numeral' => 'Numeral',
        'Substantivo-Adjetivo' => 'Substantivo-Adjetivo'
    );
    echo form_dropdown('classe_gramatical', $options);
    echo "<br>";
    echo form_error('classe_gramatical');
?>

<label for="genero">Gênero</label>
<?php 
    $options = array(
        'M' => 'Masculino',
        'F' => 'Feminino',
        'N' => 'Neutro',
        'S' => 'Sem Gênero',
        'MF' => 'Masculino/Feminino'
    );
    echo form_dropdown('genero', $options);
    echo "<br>";
    echo form_error('genero');
?>

<label for="idioma">Idioma</label>
<?php 
    $options = array(
        'PT' => 'Português',
        'EN' => 'Inglês',
        'ES' => 'Espanhol'
    );
    echo form_dropdown('idioma', $options);
    echo "<br>";
    echo form_error('idioma');
?>

<label for="definicao">Definição</label>
<textarea name="definicao" cols="35" rows="5"></textarea>
<?php echo form_error('definicao'); ?>

<label for="notas_gramatica">Notas Gramaticais</label>
<textarea name="notas_gramatica" cols="35" rows="5"></textarea>
<?php echo form_error('notas_gramatica'); ?>

<label for="notas_cultura">Notas Culturais</label>
<textarea name="notas_cultura" cols="35" rows="5"></textarea>
<?php echo form_error('notas_cultura'); ?>

<input type="submit" value="Salvar" name="submit"> <a href="../">Cancelar</a>