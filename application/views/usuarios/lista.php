<div>
    <a href="criar">Criar Usuário</a>
    <h2>Usuários disponíveis</h2>
    <table>
        <thead>
            <th>Usuário</th>
            <th>Nível Permissão</th>
            <th>Nome</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($usuarios as $linha){
                echo "<tr><td>" . $linha['usr'] . "</td><td>" . $linha['nivel_permissao'] . "</td><td>" . $linha['nome'] . "</td><td><a href=\"usuarios/editar/" . $linha['usr'] . "\" class=\"\">Editar</a><a href=\"usuarios/apagar/" . $linha['usr'] . "\" class=\"\">Apagar</a></td></tr>";
            } ?>
        </tbody>
    </table>
</div>