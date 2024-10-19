{include file="header.tpl"}

<h1>Add a bike</h1>
<form action="addItem" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Bicycle brand</label>
                <input name="item" type="text" class="form-control">
            </div>
            <div>
                <label>Year of manufacture</label>
                <input name="year" type="number" class="form-control">
            </div>
            <div>
                <label>Bicycle color</label>
                <input name="color" type="text" class="form-control">
            </div>
            <div>
                <label>Category</label>
                <select name="category">
                    {foreach from=$categories item=$category}
                    <option value={$category->id}>{$category->nombre}</option>
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