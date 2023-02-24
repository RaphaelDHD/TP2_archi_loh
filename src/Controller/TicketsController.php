<?php

namespace App\Controller;

class TicketsController extends AppController
{

    public function index()
    {
        //dd($this->Authentication);
        $tickets = $this->Tickets
            ->find()
            ->order(['id' => 'desc'])
            ->where(['id_users' => $this->request->getSession()->read('Auth.id')])
            ->limit(3)
            ->all();
        $this->set(compact('tickets'));
    }

    public function add()
    {
        $ticket = $this->Tickets->newEntity([
            'id_users' => $this->request->getSession()->read('Auth.id'),
            'title' => '',
            'description' => '',
            'level' => 0,
            'done' => FALSE

        ]);
        $this->Tickets->save($ticket);
        return $this->redirect(['action'
        => "edit", $ticket->id]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post','delete']);
        if ($id) {
            $entity = $this->Tickets->get($id);
            $this->Tickets->delete($entity);
            $this->redirect(['action'
            => "index"]);
        }
    }

    public function edit($id)
    {

        $ticket = $this->Tickets->get($id);
        if (!empty($this->getRequest()->getData())) {
            $this->Tickets->patchEntity(
                $ticket,
                $this->getRequest()->getData()
            );
            if ($this->Tickets->save($ticket)) {
                return $this->redirect(['action'
                => "index"]);
            }
        }
        $this->set(compact('ticket'));
    }

    public function view($id)
    {
    }
}
