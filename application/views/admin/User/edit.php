

    <h3>
        <?= empty($user->id)?'Add a new user' : 'Edit user '.$user->name ?>
    </h3>
    <p>Please log in using your credentials</p>


    <?=validation_errors()?>

    <?=form_open() ?>

    <table class="table">
        <tr>
            <td>Name</td>
            <td><?=form_input('name',set_value('name',$user->name)); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=form_input('email',set_value('email',$user->email)); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?=form_password('password'); ?></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><?=form_password('password_confirm'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?=form_submit('submit','save','class="btn btn-primary"'); ?></td>
        </tr>
    </table>

    <?=form_close() ?>

