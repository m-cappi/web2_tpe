
<h1>Detalle del libro</h1>
{if empty($user)}
    <section class="container w-25 mx-auto mb-3">
        <div class="row ">
            <p class="col bg-primary bg-gradient">
            Titulo
            </p>
            <p class="col ">
            {$book->title}
            </p>
        </div>
        <div class="row ">
            <p class="col bg-primary bg-gradient">
            Genero
            </p>
            <p class="col ">
            {$book->genre}
            </p>
        </div>
        <div class="row ">
            <p class="col bg-primary bg-gradient">
            Autor
            </p>
            <p class="col ">
            {foreach from=$authors item=$author}
                {if $author->id == $book->FK_author_id}
                    <a href="author/{$book->FK_author_id}">{$author->last_name}, {$author->name}</a>
                {/if}
            {/foreach}
            </p>
        </div>
    </section>
{else}
    <div class="d-flex flex-column">
        <form method="POST" action="book/update" class="d-flex flex-column">
            <input type="text" id="id" name="id" value="{$book->id}" required hidden >
            <div class="mb-3">
                <input type="text" class="form-control" id="title" name="title" placeholder="Titulo" value="{$book->title}" required >
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Genero" value="{$book->genre}" required >
            </div>

            <select class="form-select mb-3" aria-label="Authors list" name="FK_author_id">
                {foreach from=$authors item=$author}
                    <option value="{$author->id}" {if $author->id == $book->FK_author_id}selected{/if}>{$author->last_name}, {$author->name}</option>
                {/foreach}
            </select>
            <button type="submit" class="btn btn-primary w-75 mx-auto mb-3">Editar</button>
            
            {if !empty($errorMsg)}
                <p class="alert alert-danger text-center w-75 mx-auto" role="alert">
                {$errorMsg}
                </p>
            {/if}
        </form>

        <form method="POST" action="book/delete" class="d-flex flex-column">
            <input type="text" class="" id="id" name="id" value="{$book->id}" required hidden >
            <button type="submit" class="btn btn-primary w-75 mx-auto mb-3">Eliminar</button>
        </form>

    </div>
{/if}