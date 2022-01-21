
<section>
    <h2>News articles</h2>
    <?=anchor('admin/Article/edit','<i class="icon-plus"></i>Add an article')   ?>

    <table class="table table-striped ">
        <thead>
        <tr>
            <td>Title</td>
            <td>Pudate</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
            <?php if(count($articles)):?>
                <?php foreach ($articles as $article): ?>
                    <tr>
                        <td><?= anchor('admin/Article/edit/'.$article->id, $article->title) ?></td>
                        <td><?= anchor($article->pudate) ?></td>
                        <td><?=btn_edit('admin/Article/edit/'.$article->id)?></td>
                        <td><?=btn_delete('admin/Article/delete/'.$article->id) ?></td>
                    </tr>
                <?php endforeach;?>

            <?php else:?>
                <tr>
                    <td colspan="3" >We could not find any articles.</td>
                </tr>


            <?php endif;?>

        </tbody>
    </table>


</section>
