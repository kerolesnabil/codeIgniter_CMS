
<section>
    <h2>Users</h2>
    <?=anchor('admin/User/edit','<i class="icon-plus"></i>Add a user')   ?>

    <table class="table table-striped ">
        <thead>
        <tr>
            <td>Email</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
            <?php if(count($users)):?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= anchor('admin/User/edit/'.$user->id, $user->email) ?></td>
                        <td><?=btn_edit('admin/User/edit/'.$user->id)?></td>
                        <td><?=btn_delete('admin/User/delete/'.$user->id) ?></td>
                    </tr>
                <?php endforeach;?>

            <?php else:?>
                <tr>
                    <td colspan="3" >We could not find any users.</td>
                </tr>


            <?php endif;?>

        </tbody>
    </table>


</section>
