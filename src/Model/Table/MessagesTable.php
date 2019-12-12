<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;

class MessagesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->setDisplayField('message');
        $this->belongsTo('People');
    }
    public function validationDefault(Validator $validator)
    {
        $validator->allowEmpty('id', 'create');
        $validator->naturalNumber('person_id', '自然数で！')->notEmpty('person_id', 'idは必須');
        $validator->scalar('message', 'テキストを入力してね')->requirePresence('message', 'create')->notEmpty('message', 'メッセージ必須');
        return $validator;
    }
}
