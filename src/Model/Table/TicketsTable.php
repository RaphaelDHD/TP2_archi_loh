<?php

namespace App\Model\Table;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\ORM\Table;
use Cake\Http\Session;
class TicketsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users');
    }

    public function beforeFind($event, $query, $options, $primary)
    {
        $session = new Session();
        $query->andWhere(['id_users' => $session->read('Auth.id')]);
    }

    public function beforeSave(EventInterface $event, EntityInterface $entity, ArrayObject $options){
        $session = new Session();
        $entity->user_id = $session->read('Auth.id');
    }

}
