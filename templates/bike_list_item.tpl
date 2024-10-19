{include file="header.tpl"}

    <div class="container mt-5">
        <h2 class="text-center">Bicycle Table</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Year</th>
                    <th>Color</th>
                    {if (isset($smarty.session.IS_LOGGED)) }
                    <th>Edit</th>
                    <th>Delete</th>
                    {{/if}}
                </tr>
            </thead>
            <tbody>
                {foreach from=$items item=item}
                <tr>
                <td>
                    {foreach from=$categories item=$category}
                    {if $item->id_tipos_fk == $category->id}{$category->nombre}{{/if}}
                    {/foreach}
                </select></td>
                    <td>{$item->marca}</td>
                    <td>{$item->anio}</td>
                    <td>{$item->color}</td>
                    {if (isset($smarty.session.IS_LOGGED))}
                    <td><a type='button' class="btn btn-warning" href="item/{$item->id}">Edit</a></td>
                    <td><a type="button" class="btn btn-danger" href="deleteItem/{$item->id}">Delete</a></td>
                    {{/if}}
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

{include file="footer.tpl"}
