{include file="header.tpl"}

<h2 class="text-center">Bikes in stock</h2>
<div class="card">
  <ul class="list-group">
    {foreach from=$items item=$item}
      <li class="list-group-item">
        <h5>Bicycle brand: {$item->marca}</h5>
        <p>Year of manufacture: {$item->anio}</p>
        <p>Bicycle color: {$item->color}</p>
      </li>
    {/foreach}
  </ul>
</div>

{include file="footer.tpl"}