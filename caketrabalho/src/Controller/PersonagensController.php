<?php
namespace App\Controller;

use App\Controller\AppController;

class PersonagensController extends AppController
{

    public function index()
    {
    	$personagens = $this->Personagens->find('all');
	    $this->set(compact('personagens'));
    }
    /*public function view($Id)
    {
        $personagem = $this->Personagens->get($id);
        $this->set(compact('personagem'));
    }*/
     public function add()
    {
        $personagem = $this->Personagens->newEntity();
        if ($this->request->is('post')) {
            $personagem = $this->Personagens->patchEntity($personagem, $this->request->getData());
            if ($this->Personagens->save($personagem)) {
                
                return $this->redirect(['action' => 'index']);
            }
            
        }
        $this->set('personagem', $personagem);


    }
    public function view($id = null)
    {
        $personagem = $this->Personagens->get($id);
        $this->set(compact('personagem'));
    }
    public function edit($id = null)
    {
        $personagem = $this->Personagens->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Personagens->patchEntity($personagem, $this->request->getData());
            if ($this->Personagens->save($personagem)) {
                
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(('Seu artigo não pôde ser atualizado.'));
        }

        $this->set('personagem', $personagem);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $personagem = $this->Personagens->get($id);
        if ($this->Personagens->delete($personagem)) {

            return $this->redirect(['action' => 'index']);
        }
    }
     
    
}