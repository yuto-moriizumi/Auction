<?php

namespace App\Controller;

use App\Controller\AppController;

class PeopleController extends AppController
{
    public $paginate = [
        'limit' => 3,
        'finder' => 'byAge',
        //'sort' => 'id',
        //'direction' => 'asc',
        'contain' => ['Messages'],
    ];
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }
    public function index()
    {

        //if ($this->request->is('post')) {
        //$find = $this->request->data['People']['find'];
        //$arr = explode(',', $find);
        //$condition = [
        //    'conditions' => ['or' => ['name like' => $find, 'mail like' => $find]],
        //    'order' => ['People.age' => 'desc'],
        //];
        //['and' => ['age >=' => $arr[0], 'age <=' => $arr[1]]]
        //['name like' => $find]
        //$data = $this->People->find('all', $condition);
        //$data = $this->People->findByNameOrMail($find, $find);
        //$data = $this->People->find()->where(['name like' => $find]);
        //$data = $this->People->find()->andWhere(['name like' => $find])->order(['People.age' => 'desc']);
        //$data = $this->People->find('me', ['me' => $find])->contain(['Messages']);
        //$data = $this->paginate($this->People);
        //$this->set('data', $data);
        //} else {
        //$condition = [
        //'limit' => 2 //,
        //'offset' => 1
        //'page' => 2
        //];
        //$data = $this->People->find('all', $condition)->contain(['Messages']);
        //}
        $data = $this->paginate($this->People);
        $this->set('data', $data);
    }

    public function add()
    {
        $msg = 'please type your personal data...';
        $entity = $this->People->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->data['People'];
            $entity = $this->People->newEntity($data);
            if ($this->People->save($entity)) {
                return $this->redirect(['action' => 'index']);
            }
            $msg = 'Error was occured...';
        }
        $this->set('msg', $msg);
        $this->set('entity', $entity);
    }
    public function create()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data('People');
            $entity = $this->People->newEntity($data);
            $this->People->save($entity);
        }
        return $this->redirect(['action' => 'index']);
    }
    public function edit()
    {
        $id = $this->request->query['id'];
        $entity = $this->People->get($id);
        $this->set('entity', $entity);
    }
    public function update()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data['People'];
            $entity = $this->People->get($data['id']);
            $this->People->patchEntity($entity, $data);
            $this->People->save($entity);
        }
        return $this->redirect(['action' => 'index']);
    }
    public function delete()
    {
        $id = $this->request->query['id'];
        $entity = $this->People->get($id);
        $this->set('entity', $entity);
    }
    public function destroy()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data['People'];
            $entity = $this->People->get($data['id']);
            $this->People->delete($entity);
        }
        return $this->redirect(['action' => 'index']);
    }
}
