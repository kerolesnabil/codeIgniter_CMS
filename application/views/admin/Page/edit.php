

    <h3>
        <?= empty($page->id)?'Add a new page' : 'Edit user '.$page->title ?>
    </h3>


    <?=validation_errors()?>

    <?=form_open() ?>

    <table class="table">
        <tr>
            <td>Parent</td>
            <td><?=form_dropdown('parent_id',$pages_no_parents,$this->input->post('parent_id') ? $this->input->post('parent_id') : $page->parent_id); ?></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><?=form_input('title',set_value('title',$page->title)); ?></td>
        </tr>
        <tr>
            <td>Slug</td>
            <td><?=form_input('slug',set_value('slug',$page->slug)); ?></td>
        </tr>
        <tr>
            <td>Body</td>
            <td><?=form_textarea('body',set_value('body',$page->body),'class="tinymce"'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?=form_submit('submit','save','class="btn btn-primary"'); ?></td>
        </tr>
    </table>

    <?=form_close() ?>
