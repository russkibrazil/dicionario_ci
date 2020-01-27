<?php
    if ($salvo)
        echo "<div class=''> <h3>Item salvo!</h3> </div>";
?>

<?php echo validation_errors(); ?>

<?php echo form_open('usuarios/criar'); ?>

    <label for="usuario">Usuário</label>
    <input type="text" name="usuario" size="30" /><br />
    <?php echo form_error('usuario'); ?>

    <label for="senha">Senha</label>
    <input type="password" name="senha" size="30"><br />
    <?php echo form_error('senha'); ?>

    <label for="confirmasenha">Confirme a Senha</label>
    <input type="password" name="confirmasenha" size="30"><br />
    <?php echo form_error('confirmasenha'); ?>

    <label for="acesso">Nível de acesso</label>
    <?php $options = array('ADM' => 'Administrador', 'EDT' => 'Editor', 'USR' => 'Usuário');
        echo form_dropdown('acesso',$options);
        ?> <br>
    <?php echo form_error('acesso'); ?>
    
    <label for="nome">Nome</label>
    <input type="text" name="nome" size="30"><br />
    <?php echo form_error('nome'); ?>
    
    <label for="email">E-mail</label>
    <input type="email" name="email" size="30"><br />
    <?php echo form_error('email'); ?>
    
    <label for="cpf">CPF</label>
    <input type="text" name="cpf" size="30"><br />
    <?php echo form_error('cpf'); ?>
    
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" size="30"><br />
    <?php echo form_error('telefone'); ?>
    
    <label for="rede_social">Senha</label>
    <input type="text" name="rede_social" size="30"><br />
    <?php echo form_error('rede_social'); ?>

    <input type="submit" name="submit" value="Criar" />
    
</form>