<!DOCTYPE html>
<html>
<?php

use App\Models\Todos;

$todos = Todos::all() ?>

Todos starts here
<?php foreach ($todos as $todo) : ?>
    <br>
    <hr>
    <?= $todo->task ?>
    <hr>
    <?= $todo->status ?>
    <br>
<?php endforeach; ?>

</html>