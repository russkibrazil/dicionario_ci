<?php echo form_open('usuarios/editar'); ?>

    <label for="usuario">Usuário</label>
    <input type="text" name="usuario" size="30"  value="<?php echo $usuario['usr']; ?> "/><br />
    <?php echo form_error('usuario'); ?>

    <label for="senha">Senha</label>
    <input type="password" name="senha" size="30" value="<?php echo $usuario['pass']; ?> "><br />
    <?php echo form_error('senha'); ?>

    <label for="confirmasenha">Confirme a Senha</label>
    <input type="password" name="confirmasenha" size="30"><br />
    <?php echo form_error('confirmasenha'); ?>

    <label for="acesso">Nível de acesso</label>
    <?php $options = array('ADM' => 'Administrador', 'EDT' => 'Editor', 'USR' => 'Usuário');
        echo form_dropdown('acesso',$options,$usuario['nivel_permissao']);
        ?> <br>
    <?php echo form_error('acesso'); ?>
    
    <label for="nome">Nome</label>
    <input type="text" name="nome" size="30" value="<?php echo $usuario['nome']; ?> "><br />
    <?php echo form_error('nome'); ?>
    
    <label for="email">E-mail</label>
    <input type="email" name="email" size="30" value="<?php echo $usuario['email']; ?> "><br />
    <?php echo form_error('email'); ?>
    
    <label for="cpf">CPF</label>
    <input type="text" name="cpf" size="30" value="<?php echo $usuario['cpf']; ?> "><br />
    <?php echo form_error('cpf'); ?>
    
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" size="30" value="<?php echo $usuario['telefone']; ?> "><br />
    <?php echo form_error('telefone'); ?>
    
    <label for="rede_social">Rede Social</label>
    <input type="text" name="rede_social" size="30" value="<?php echo $usuario['rede_social']; ?> "><br />
    <?php echo form_error('rede_social'); ?>

    <input type="submit" name="submit" value="Salvar" /> <a href="../">Cancelar</a>
    
</form>