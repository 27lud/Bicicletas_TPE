{include file="header.tpl"}

<h1>Change category of bike </h1>
<form action="updateCategory/{$category->id}" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Category name</label>
                <input value="{$category->nombre}" name="category" type="text" class="form-control">
            </div>
            <div>
                <label>Description</label>
                <input  value="{$category->descripcion}" name="information" type="text" class="form-control">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    {if $error != null}
        <p>{$error}</p>
    {{/if}}
</form>

{include file="footer.tpl"}