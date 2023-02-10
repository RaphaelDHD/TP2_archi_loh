<?php 
namespace App\Controller;

class TicketsController extends AppController {

    public function index(){

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

