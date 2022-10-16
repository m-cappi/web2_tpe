{if !empty($user)}
<form method="POST" action="author/add" class="d-flex flex-column">
<legend>Agregar un nuevo autor</legend>
<div class="mb-3">
<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required >
</div>
<div class="mb-3">
<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" required >
</div>
<button type="submit" class="btn btn-primary w-75 mx-auto mb-3">Enviar</button>

{if !empty($errorMsg)}
    <p class="alert alert-danger text-center w-75 mx-auto" role="alert">
    {$errorMsg}
    </p>
{/if}
</form>
{/if}