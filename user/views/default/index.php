User
Now i want the data that is coming should be view in table format
<?php
use yii\helpers\Html;

// Assuming $test is an array or object containing data you want to display
//echo "<pre>"; // To check wheater we are getting the data or not
//print_r($data);
//?>

<div class="user-default-index">
    <h1>User Modules</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item): ?>
            <tr>
                <td><?= Html::encode($item['id']) ?></td>
                <td><?= Html::encode($item['name']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>
    <p>
        You may customize this page by editing the following file:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>
