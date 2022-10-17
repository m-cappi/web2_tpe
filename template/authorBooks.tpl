
<h1>Lista de libros por autor</h1>


<h1>Listado de autores</h1>

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
    <p class="col">
      <a href="author/{$book->FK_author_id}" >
        {$book->author|lower|capitalize}
      </a>
    </p>
    <p class="col-6">
        <a href="book/{$book->id}" >
        {$book->title|lower|capitalize}
        </a>
    </p>
    <p class="col">
      {$book->genre|lower|capitalize}
    </p>
</article>

{/foreach}
</section>