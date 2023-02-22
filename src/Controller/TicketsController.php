<?php

namespace App\Controller;

class TicketsController extends AppController
{

    public function index()
    {
        $tickets = $this->Tickets
            ->find()
            ->order(['id' => 'desc'])
            ->where(['id_users' => ($_SESSION['user']['id'] ?? 1)])
            ->all();
        $this->set(compact('tickets'));
    }

    public function add()
    {
        $ticket = $this->Tickets->newEntity([
            'id_users' => $_SESSION['id'] ?? 1,
            'title' => '',
            'description' => '',
            'level' => 0,
            'done' => FALSE

        ]);
        //debug($ticket);
        $this->Tickets->save($ticket);
        return $this->redirect(['action'
        => "edit", $ticket->id]);
    }

    public function delete()
    {
    }

    public function edit($id)
    {

        $ticket = $this->Tickets->get($id);
        debug($ticket);
        if (!empty($this->getRequest()->getData())) {
            $this->Tickets->patchEntity(
                $ticket,
                $this->getRequest()->getData()
            );
            //debug($id);


            if ($this->Tickets->save($ticket)) {
                return $this->redirect(['action'
                => "index"]);
            }
        }
        $this->set(compact('ticket'));
    }
}
