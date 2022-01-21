
<section>
    <h2>Users</h2>
    <?=anchor('admin/Page/edit','<i class="icon-plus"></i>Add a page')   ?>

    <table class="table table-striped ">
        <thead>
        <tr>
            <td>Title</td>
            <td>Parent</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
            <?php if(count($pages)):?>
                <?php foreach ($pages as $page): ?>
                    <tr>
                        <td><?= anchor('admin/Page/edit/'.$page->id, $page->title) ?></td>
                        <td><?= anchor($page->parent_slug,$page->parent_slug) ?></td>
                        <td><?=btn_edit('admin/Page/edit/'.$page->id)?></td>
                        <td><?=btn_delete('admin/Page/delete/'.$page->id) ?></td>
                    </tr>
                <?php endforeach;?>

            <?php else:?>
                <tr>
                    <td colspan="3" >We could not find any pages.</td>
                </tr>


            <?php endif;?>

        </tbody>
    </table>


</section>
