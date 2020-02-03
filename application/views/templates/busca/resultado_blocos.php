<h2>
    <?php 
        echo $palavra['Lema'];
        if (isset($palavra['sublema'])) {
            echo "(" . $palavra['sublema'] .")";
        }
    ?>
</h2>
<div id="sumario">
    <ol>
    <?php
        foreach ($palavra as $linha) {
            echo "<li><a href=\"#" . $linha['equivalente'] . $linha['Lema_Eq'] ."\">" . $linha['Lema_Eq'] . "(" . $linha['MarcaUso'] . ")";
        }
    ?>
    </ol>
</div>
<?php
    echo "<div id=\"" . $linha['equivalente'] . $linha['Lema_Eq'] . "\">";
    echo "<h3>" . $palavra['Lema_Eq'] . "</h3>";
    echo "<h4>" . $palavra['MarcaUso'] . "</h4>";
    echo "<h5>Flexões</h5>";
    $pos = array_filter($conjugacao, function($k, $v) use($palavra) {
        return $k == 'IdPalavra' && $v == $palavra['equivalente'];
        }, ARRAY_FILTER_USE_BOTH
    );
    echo $pos['ConstrPresente'];
    echo $pos['ConstrPassado'];
    echo $pos['ConstrWill'];
    echo $pos['ConstrGoingTo'];
    echo $pos['ConstrPresPer'];
    echo $pos['ConstrPasPer'];
    echo $pos['ConstrPresCon'];
    echo $pos['ConstrPasCon'];

    echo "<h5>Exemplos</h5>";
    echo $pos['ExPresente'];
    echo $pos['ExPassado'];
    echo $pos['ExWill'];
    echo $pos['ExGoingTo'];
    echo $pos['ExPresPer'];
    echo $pos['ExPasPer'];
    echo $pos['ExPresCon'];
    echo $pos['ExPasCon'];

    echo "<h5>Notas Culturais e Gramaticais";
    echo $palavra['EquivalenteNotaCultura'];
    echo $palavra['EquivalenteNotaGramatica'];
    echo $palavra['EquivalenciaNotaCultura'];
    echo $palavra['EquivalenciaNotaGramatica'];
    
    echo "<h5>Fraseologia</h5>";
    $pos = array_filter($fraseologia, function($k, $v) use($palavra) {
        return $k == 'IdPalavra' && $v == $palavra['equivalente'];
    }, ARRAY_FILTER_USE_BOTH
    );
    echo "<table><thead><th>Original</th><th>Equivalente</th></thead><tbody>";
    echo "<tr><td>" . $pos['FraseOrig'] . "</td><td>" . $pos['FraseEquiv'] . "</td></tr>";
    echo "<tr><td>" . $pos['ExemploOrig'] . "</td><td>" . $pos['ExemploEquiv']  . "</td></tr>";
    echo "</tbody></table>";
    echo "</div>";