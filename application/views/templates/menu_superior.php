<html>
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
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
                <a class="btn btn-link">Entrar</a>
              </div>
          </nav>