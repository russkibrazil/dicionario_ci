<?php
    echo form_open('auth/login');
?>
<label for="usuario">Usuário</label>
<input type="text" name="usuario" size="30">

<label for="senha">Senha</label>
<input type="password" name="senha" size="30">

<input type="submit" value="Entrar" name="submit">