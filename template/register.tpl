
<h1>Registro de usuario</h1>

<form method="POST" action="register" class="d-flex flex-column">

  <div class="mb-3">
    <label for="alias" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="alias" name="alias" value="Martin" required >
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="mail@mail.com" required>
    <div id="emailHelp" class="form-text">Prometemos compartir tu email y datos financierons con la AFIP.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password" value="123456" >
  </div>
  {* <div class="mb-3">
    <label for="password2" class="form-label">Verificar contraseña</label>
    <input type="password" class="form-control" id="password2" name="password2" value="123456" required>
  </div> *}
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="isAdmin">
    <label class="form-check-label" name="isAdmin" for="isAdmin">Es administrador</label>
  </div>

  {if !empty($errorMsg)}
    <p class="alert alert-danger text-center w-75 mx-auto" role="alert">
      {$errorMsg}
    </p>
  {/if}

  <button type="submit" class="btn btn-primary w-75 mx-auto mb-3">Enviar</button>

  
  <p class="text-center text-muted mb-0">Ya tenes una cuenta? <a href="login" class="fw-bold text-body">Inicia sesion!</a></p>

</form>
  
