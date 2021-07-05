<!-- File: templates/Articles/index.php -->

<h1>Blog articles</h1>
<?= $this->Html->link('Add Article', ['action' => 'add']) ?>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

<?php foreach ($articles as $article): ?>
<tr>
    <td><?= $article->id ?></td>
    <td>
        <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
    </td>
    <td>
        <?= $article->created->format(DATE_RFC850) ?>
    </td>
    <td>
        <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
    </td>
    <td>
        <?= $this->Form->postLink(
            'Delete',
            ['action' => 'delete', $article->id],
            ['confirm' => 'Are you sure?']);
        ?>
    </td>
</tr>
<?php endforeach; ?>
</table>