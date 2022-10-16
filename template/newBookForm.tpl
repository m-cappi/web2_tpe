{if !empty($user)}
    <form method="POST" action="book/add" class="d-flex flex-column">
    <legend>Agregar un nuevo libro</legend>
    <div class="mb-3">
    <input type="text" class="form-control" id="title" name="title" placeholder="Titulo" required >
    </div>
    <div class="mb-3">
    <input type="text" class="form-control" id="genre" name="genre" placeholder="Genero" required >
     </div>

    <select class="form-select mb-3" aria-label="Authors list" name="FK_author_id">
    {foreach from=$authors item=$author}
        <option value="{$author->id}">{$author->last_name}, {$author->name}</option>
    {/foreach}
        </select>
    <button type="submit" class="btn btn-primary w-75 mx-auto mb-3">Enviar</button>
    
    {if !empty($errorMsg)}
        <p class="alert alert-danger text-center w-75 mx-auto" role="alert">
        {$errorMsg}
        </p>
    {/if}
    </form>
    {/if}