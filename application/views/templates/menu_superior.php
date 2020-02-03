<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
    <body>
        <nav class="navbar nav-fill sticky-top navbar-expand-lg navbar-dark bg-secondary">
              <a class="navbar-brand">Projeto Interlex</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link">Home</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link">Busca</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link">Palavras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Referências</a>
                  </li>
                  <li class="nav-item">
                    <a (click)="onClickUsuarios()" class="nav-link">Usuários</a>
                  </li>
                </ul>
                <a class="btn btn-link">Entrar</a>
              </div>
          </nav>