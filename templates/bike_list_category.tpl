{include file="header.tpl"}

<h1 class="text-center">Categories of bikes </h1>
<div class="card">
  {foreach from=$categories item=$category}
    <div class="card-body">
      <h3 class="text-dark">{$category->nombre}</h3>
      <p class="text-secondary">{$category->descripcion}</p>
      <a type="button" class="btn btn-success" href="bicycles/{$category->id}">Show more</a>
      {if (isset($smarty.session.IS_LOGGED))}
        <a type='button' class="btn btn-warning" href="category/{$category->id}">Edit</a>
        <a type="button" class="btn btn-danger" href="deleteCategory/{$category->id}">Delete</a>
      {{/if}}
    </div>
  {/foreach}
  {if ($error)}
    <p class="text-danger">{$error}</p>
  {{/if}}
</div>
<p class="mt-3"><b>Showing {$count} Category of bikes</b></p>

{include file="footer.tpl"}

