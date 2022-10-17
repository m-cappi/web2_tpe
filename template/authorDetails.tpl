
<h1>Detalle del Autor</h1>
{if empty($user)}
    <section class="container w-25 mx-auto mb-3">
        <div class="row ">
            <p class="col bg-primary bg-gradient">
            Nombre
            </p>
            <p class="col ">
            {$author->name|lower|capitalize}
            </p>
        </div>
        <div class="row ">
            <p class="col bg-primary bg-gradient">
            Apellido
            </p>
            <p class="col ">
            {$author->last_name|lower|capitalize}
            </p>
        </div>
    </section>
{else}
    <div class="d-flex flex-column">
        <form method="POST" action="author/update" class="d-flex flex-column">
            <input type="text" id="id" name="id" value="{$author->id}" required hidden >
            <div class="mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{$author->name}" required >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido" value="{$author->last_name}" required >
            </div>

            <button type="submit" class="btn btn-primary w-75 mx-auto mb-3">Editar</button>
            
            {if !empty($errorMsg)}
                <p class="alert alert-danger text-center w-75 mx-auto" role="alert">
                {$errorMsg}
                </p>
            {/if}
        </form>

        <form method="POST" action="author/delete" class="d-flex flex-column">
            <input type="text" class="" id="id" name="id" value="{$author->id}" required hidden >
            <button type="submit" class="btn btn-primary w-75 mx-auto mb-3">Eliminar</button>
        </form>

    </div>
{/if}