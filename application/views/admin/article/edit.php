

    <h3>
        <?= empty($article->id)?'Add a new page' : 'Edit user '.$article->title ?>
    </h3>


    <?=validation_errors()?>

    <?=form_open() ?>

    <table class="table">
        <tr>
            <td>Publication date</td>
            <td><?=form_input('pudate',set_value('pudate',$article->pudate),'class="datepicker"'); ?></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><?=form_input('title',set_value('title',$article->title)); ?></td>
        </tr>
        <tr>
            <td>Slug</td>
            <td><?=form_input('slug',set_value('slug',$article->slug)); ?></td>
        </tr>
        <tr>
            <td>Body</td>
            <td><?=form_textarea('body',set_value('body',$article->body),'class="tinymce"'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?=form_submit('submit','save','class="btn btn-primary"'); ?></td>
        </tr>
    </table>

    <?=form_close() ?>


    <script>
        $(function () {
            $('.datepicker').datepicker({format : 'yyyy-mm-dd'})
        });

    </script>
