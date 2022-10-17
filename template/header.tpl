
<header class="px-lg-5 px-2 bg-light">
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">Biblioteca</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="books/list">Libros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="authors/list">Autores</a>
          </li>
        </ul>
        <div class="d-flex align-items-center">
        {if empty($user)}
          <span class="nav-item">
            <a href="login" class="nav-link ">
              <i class="fas fa-solid fa-user-plus fa-1x">Login</i>
            </a>
          </span>
        {else}
          <span class="navbar-brand">Hola {$user['alias']|lower|capitalize}!</span>
          <a href="logout" class="nav-link">
            <i class="fas fa-1x fa-solid fa-door-open">Logout</i>
          </a>
        {/if}
        </div>
      </div>
    </div>
  </nav>
</header>