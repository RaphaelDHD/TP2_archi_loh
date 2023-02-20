<?php 
namespace App\Controller;

class TicketsController extends AppController {

    public function index(){
        $tickets = $this->Tickets
        ->find()
        ->order(['id' => 'desc'])
        ->where(['id_users' => ($_SESSION['user']['id'] ?? 1)])
        ->all();
        $this->set(compact('tickets'));
    }

    public function add(){
        $ticket = $this->Tickets->newEmptyEntity();
        $this->set(compact('ticket'));
    }

    public function delete(){

    }

    public function edit(){

    }

}

