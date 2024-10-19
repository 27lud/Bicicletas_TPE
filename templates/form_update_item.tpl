{include file="header.tpl"}

<h1>Edit bike data</h1>
<form action="updateItem/{$item->id}" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Bicycle brand</label>
                <input value="{$item->marca}" name="item" type="text" class="form-control">
            </div>
            <div>
                <label>Year of manufacture</label>
                <input  value="{$item->anio}" name="year" type="text" class="form-control">
            </div>
            <div>
                <label>Bicycle color</label>
                <input  value="{$item->color}" name="color" type="text" class="form-control">
            </div>
            <div>
                <label>Category</label>
                <select name="category">
                    {foreach from=$categories item=$category}
                    <option value={$category->id} {if $item->id_tipos_fk == $category->id} selected {{/if}}>{$category->nombre}</option>
                {/foreach}
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    {if $error != null}
        <p>{$error}</p>
    {{/if}}
</form>

{include file="footer.tpl"}