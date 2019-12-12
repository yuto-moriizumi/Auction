<p>This is People Table records</p>
<!-- <pre><?php print_r($data->toArray()) ?></pre> -->
<?= $this->Form->create(null, ['type' => 'post', 'url' => ['controller' => 'People', 'action' => 'index']]) ?>
<div>find</div>
<div><?= $this->Form->text('People.find') ?></div>
<div><?= $this->Form->submit('検索') ?></div>
<div><?= $this->Form->end() ?></div>
<hr>
<table>
    <thread>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('mail') ?></th>
            <th><?= $this->Paginator->sort('age') ?></th>
            <th>messages</th>
            <th></th>
        </tr>
    </thread>
    <tbody>
        <?php foreach ($data->toArray() as $obj) : ?>
            <tr>
                <td><?= h($obj->id) ?></td>
                <td><a href="<?= $this->Url->build(['controller' => 'People', 'action' => 'edit']); ?>?id=<?= $obj->id ?>"><?= h($obj->name) ?></a></td>
                <td><?= h($obj->mail) ?></td>
                <td><?= h($obj->age) ?></td>
                <td><?php foreach ($obj->messages as $item) : ?>
                        "<?= h($item->message) ?>"<br><?php endforeach; ?></td>
                <td><a href="<?= $this->Url->build(['controller' => 'People', 'action' => 'delete']); ?>?id=<?= $obj->id ?>">delete</a></td>
            </tr><?php endforeach; ?>
    </tbody>
</table>
<div class='pagination'>
    <ul class='pagination'>
        <?= $this->Paginator->first('最初') ?>
        <?= $this->Paginator->prev('前へ') ?>
        <?= $this->Paginator->next('次へ') ?>
        <?= $this->Paginator->last('最後') ?>
    </ul>
</div>