
<h1>Listado de autores</h1>
<section class="container w-25 mx-auto mb-3">
    <article class="row bg-primary bg-gradient fs-4">
        <p class="col">
            Nombre, Apellido
        </p>
    </article>
{foreach from=$authors item=$author}
        <article class="row">
            <p class="col">
                <a href="author/{$author->id}" >
                  {$author->name|lower|capitalize}, {$author->last_name|lower|capitalize}
                </a>
            </p>
        </article>
        
{/foreach}
</section>

{include file="./newAuthorForm.tpl"}