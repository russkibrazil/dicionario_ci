<div>
    <a href="criar">Criar Referência</a>
    <h2>Referências Cadastradas</h2>
    
    <input type="text" size="20" name="busca">
    <input type="submit" name="submit" value="Pesquisar">
    
    <table>
        <thead>
            <th>Código</th>
            <th>Descrição</th>
            <th>Autor</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($referencias as $linha){
                echo "<tr><td>" . $linha['cod'] . "</td><td>" . $linha['descricao'] . "</td><td>" . $linha['autor'] . "</td><td><a href=\"referencia/editar/" . $linha['cod'] . "\" class=\"\">Editar</a><a href=\"referencia/apagar/" . $linha['cod'] . "\" class=\"\">Apagar</a></td></tr>";
            } ?>
        </tbody>
    </table>
    <div></div>
</div>