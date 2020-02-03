<div>
    <a href="criar">Criar Equivalência</a>
    <h2>Equivalências disponíveis</h2>
    <p>Referente a palavra <b><?php echo $palavra['lema'];?></b></p>
    <table>
        <thead>
            <th>#</th>
            <th>Palavra Equivalente</th>
            <th>Marca de Uso</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php 
                foreach ($equivalencias_origem as $linha){
                    echo "<tr>";
                    echo "<td>" . $linha['nApresentacao'] . "</td><td>" . $linha['equivalente'] . "</td><td>" . $linha['MarcaUso'] . "</td>";
                    echo "<td><a href=\"\">Editar</a><a href=\"\">Apagar</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>