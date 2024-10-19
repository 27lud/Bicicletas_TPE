{include file="header.tpl"}

<h1>Add type of bike </h1>
<form action="addCategory" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label> Category name</label>
                <input name="category" type="text" class="form-control">
            </div>
            <div>
                <label>Description</label>
                <input name="information" type="text" class="form-control">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    {if $error != null}
        <p>{$error}</p>
    {{/if}}
</form>

{include file="footer.tpl"}