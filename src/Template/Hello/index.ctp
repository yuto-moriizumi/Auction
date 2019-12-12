<p>This is sample content</p>
<p>これは、Helloレイアウトを利用したサンプルです</p>

<table>
    <?= $this->Html->tableHeaders(['title', 'name', 'mail'], ['style' => ['background:#006;color:white']]) ?>
    <?= $this->Html->tableCells([
        ["this is sample", "taro", "taro@hmail.com"],
        ["Hello", 'hanako', 'hanako@flower'],
        ['test', 'sachiko', 'sachio@gmail.com']
    ], ['style' => ['background:#ccf']], [
        'style' => ['background:#dff']
    ]);
    ?>
</table>
<?= $this->Html->nestedList(['first', 'Second', 'third' => ['one', 'wto']]) ?>
<?= $this->Url->build(['controller' => 'Hello', 'action' => 'index', '?' => ['id' => 'way', 'id2' => 'hra']]) ?>
<?= $this->Url->build(['controller' => 'Hello', 'action' => 'show', '_ext' => 'png', 'sample']) ?>
<?= $this->Text->autoLinkUrls('http://www.google.com') ?>

<!--
    <!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <style>
        h1 {
            font-size: 48pt;
            margin: 0px 0px 10px 0px;
            padding: 0px 20px;
            color: white;
            background: linear-gradient(to right, #aaa, #fff);
        }

        p {
            font-size: 14pt;
            color: #666;
        }
    </style>
</head>

<body>
    <header class='row'>
        <h1><?= $title ?></h1>
    </header>
    <div class="row">
        <pre><?= print_r($data); ?></pre>
    </div>
    <div class="row">
        <table>
        <?= $this->Form->create(null, ['type' => 'post', 'url' => ['controller' => 'Hello', 'action' => 'index']]) ?>
            <tr>
                <th>name</th>
                <td>
                    <?= $this->Form->text('Form1.name') ?></td>
            </tr>
            <tr>
                <th>mail</th>
                <td>
                    <?= $this->Form->text('Form1.mail') ?></td>
            </tr>
            <tr>
                <th>age</th>
                <td>
                    <?= $this->Form->text('Form1.age') ?></td>
            </tr>
            <tr>
                <th>CheckBox</th>
                <td><?= $this->Form->CheckBox('Form1.check', ['id' => 'check1', 'value' => 'text']) ?><?= $this->Form->label('check1', 'check box') ?></td>
            </tr>
            <tr>
                <th>RadioBUtton</th>
                <td><?= $this->Form->radio('Form1.radio', [
                        [
                            'text' => 'male', 'value' => '男性', 'checked' => 'true'
                        ], ['text' => 'female', 'value' => '女性']
                    ]) ?></td>
            </tr>
            <tr>
                <th>Select</th>
                <td><?= $this->Form->select('Form1.select', ['one' => '最初', 'two' => '2', 'three' => '3']) ?></td>
            </tr>
            <tr>
                <th>Select2</th>
                <td><?= $this->Form->select('Form1.select2', ['one' => '最初', 'two' => '2', 'three' => '3'], ['multiple' => true, 'size' => 5]) ?></td>
            </tr>
            <tr>
                <th></th>
                <td><?= $this->Form->submit('送信') ?></td>
            </tr>
            <?= $this->Form->end() ?>
        </table>
    </div>
</body>

</html>
                    -->