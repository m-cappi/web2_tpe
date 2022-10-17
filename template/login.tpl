
<h1>Inicio de sesion</h1>

<form action="login" class="d-flex flex-column" method="POST">
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">Prometemos compartir tu email y datos financierons con la AFIP.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary w-75 mx-auto mb-3">Iniciar</button>

  
  <div class="d-flex align-items-center justify-content-center pb-4">
    <p class="mb-0 me-2">No tenes una cuenta?</p>
    <a href="register"><button type="button" class="btn btn-outline-danger">Registrate!</button></a>
  </div>
</form>

