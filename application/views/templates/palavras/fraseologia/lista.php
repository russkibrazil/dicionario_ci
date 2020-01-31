<div>
    <a href="criar">Criar Usuário</a>
    <h2>Usuários disponíveis</h2>
    <table>
        <thead>
            <th>Frase Original</th>
            <th>Frase Equivalente</th>
            <th>Categoria</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($fraseologia as $linha){
                echo "<tr><td>" . $linha['FraseOrig'] . "</td><td>" . $linha['Categoria'] . "</td><td><a href=\"usuarios/editar/" . $linha['FraseOrig'] . "/" . $linha['FraseEquiv'] . "/" . $linha['Categoria'] ."\" class=\"\">Editar</a><a href=\"usuarios/apagar/" . $linha['FraseOrig'] . "/" . $linha['FraseEquiv'] . "/" . $linha['Categoria'] . "\" class=\"\">Apagar</a></td></tr>";
            } ?>
        </tbody>
    </table>
</div>