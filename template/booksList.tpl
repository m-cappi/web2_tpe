
<h1>Listado de libros</h1>

{if !empty($errorMsg)}
  <p class="alert alert-danger text-center w-75 mx-auto" role="alert">
    {$errorMsg}
  </p>
{/if}

<section class="container gap-3">
<article class="row bg-primary bg-gradient fs-4">
    <p class="col-6">
      Titulo
    </p>
    <p class="col">
      Genero
    </p>
    <p class="col">
      Autor
    </p>
</article>
{foreach from=$books item=$book}
<article class="row">
    <p class="col-6">
        <a href="book/{$book->id}" >
        {$book->title|lower|capitalize}
        </a>
    </p>
    <p class="col">
      {$book->genre|lower|capitalize}
    </p>
    <p class="col">
      <a href="author/{$book->FK_author_id}" >
        {$book->author|lower|capitalize}
      </a>
    </p>
</article>

{/foreach}
</section>

{include file="./newBookForm.tpl"}