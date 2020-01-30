<div>
    <a href="criar">Criar Palavra</a>
    <h2>Palavras disponíveis</h2>
    <table>
        <thead>
            <th>Lema</th>
            <th>Idioma</th>
            <th>Classe Gramatical</th>
            <th>Gênero</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($palavras as $linha){
                echo "<tr><td><a href=\"ver/" . $linha['Id'] ."\">" . $linha['Lema'];
                if ($linha['Sublema'])
                    echo " (" . $linha['Sublema'] . ")";
                echo "</a></td><td>" . $linha['Idioma'] . "</td><td>" . $linha['ClasseGram'] . "<td>" . $linha['Genero'] . "</td><td><a href=\"palavras/editar/" . $linha['Id'] . "\" class=\"\">Editar</a><a href=\"palavras/apagar/" . $linha['Id'] . "\" class=\"\">Apagar</a></td></tr>";
            } ?>
        </tbody>
    </table>
</div>