<div>
    <h2>
        <?php 
            $palavra['Lema'];
            if ($linha['Sublema'])
                echo " (" . $linha['Sublema'] . ")";
        ?>
    </h2>
    <h4><?php echo $linha['ClasseGram'] . " " . $linha['Genero'];?></h4>
    <p> <?php echo $linha['Idioma'];?></p>
    <?php
        if ($linha['Definicao']){
            echo "<h4>Definição</h4>";
            echo "<p>" . $linha['Definicao'] . "</p>";
        }
        if ($linha['notas_gramatica']){
            echo "<h4>Notas Gramaticais</h4>";
            echo "<p>" . $linha['notas_gramatica'] . "</p>";
        }
        if ($linha['notas_cultura']){
            echo "<h4>Notas Culturais</h4>";
            echo "<p>" . $linha['notas_cultura'] . "</p>";
        }
    ?>
    <a href="../editar/<?php echo $palavra['Id'];?>">Editar</a><a href="../apagar/<?php echo $palavra['Id'];?>">Apagar</a>
    <?php
        echo "<h3>Equivalências</h3>";
        echo "<h4>Como Palavra de Origem</h4>";
        echo "<table><thead><th>Palavra Equivalente</th><th>Marca de Uso</th><th>Ações</th></thead><tbody>";
        foreach ($equivalencias_origem as $linha){
            echo "<tr>";
            echo "<td>" . $linha['equivalente'] . "</td><td>" . $linha['MarcaUso'] . "</td>";
            echo "<td><a href=\"\">Editar</a><a href=\"\">Apagar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";

        echo "<h4>Como Palavra de Destino</h4>";
        
        echo "<h3>Conjugações</h3>";
        echo "<a href=\"\">Editar Conjugações</a>";
        
        echo "<h3>Fraseologia</h3>";
        echo "<table><thead><th>Palavra Equivalente</th><th>Marca de Uso</th><th>Ações</th></thead><tbody>";
        foreach ($frases as $linha){
            echo "<tr>";
            echo "<td>" . $linha['FraseOrig'] . "</td><td>" . $linha['FraseEquiv'] . "</td><td>" . $linha['Categoria'] . "</td>";
            echo "<td><a href=\"\">Editar</a><a href=\"\">Apagar</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    ?>
</div>