<?php

namespace App\Controller;

use App\Controller;

class HelloController extends AppController
{

    //public $autoRender=false;
    private $data = [
        ['name' => 'taro', 'mail' => 'taro@yamada', 'tel' => '0901920921'],
        ['name' => 'hanako', 'mail' => 'hanako@yamada', 'tel' => '011102011'],
        ['name' => 'sachikop', 'mail' => 'sachikop@yamada', 'tel' => '09019209awaqfwq21']
    ];

    public function initialize()
    {
        $this->viewBuilder()->setLayout('hello');
    }

    public function index()
    {
        $values = [
            'header' => 'Hello',
            'footer' => 'Volga'
        ];
        $this->set($values);
    }

    public function printData()
    {
        $this->viewBuilder()->autoLayout(false);
        $this->set('title', 'Hello!');
        if ($this->request->isPost()) {
            $this->set('data', $this->request->data['Form1']);
        } else {
            $this->set('data', []);
        }
    }

    public function form()
    {
        $this->viewBuilder()->autoLayout(false);
        $name = $this->request->data['name'];
        $mail = $this->request->data['mail'];
        $age = $this->request->data['age'];
        $res = 'こんにちは、' . $name . '(' . $age . ')さん。メールアドレスは、.' . $mail . 'ですね？';
        $values = [
            'title' => 'Result',
            'message' => $res
        ];
        $this->set($values);
    }

    public function showQuery()
    {
        $id = isset($this->request->query['id']) ? $this->request->query['id'] : 0;
        echo json_encode($this->data[$id]);
    }
    public function getIdPassFromQuery()
    {
        $id = isset($this->request->query['id']) ? $this->request->query['id'] : 'no name';
        $pass = isset($this->request->query['pass']) ? $this->request->query['pass'] : 'no ';
        echo "<html><body><h1>Hello!</h1>";
        echo '<ul><li>your id:' . $id . '</li>';
        echo '<li>your pass:' . $pass . '</li></ul>';
        echo "<p>This is sample page.</p></body></html>";
    }
}
