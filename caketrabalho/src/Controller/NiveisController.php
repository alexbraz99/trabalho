<?php
namespace App\Controller;

use App\Controller\AppController;

class NiveisController extends AppController
{

    public function index()
    {
    	$nivel = $this->Niveis->find('all');
	    $this->set(compact('nivel'));
    }
    
      public function add()
    {
        $nivel = $this->Niveis->newEntity();
        if ($this->request->is('post')) {
            $nivel = $this->Niveis->patchEntity($nivel, $this->request->getData());
            if ($this->Niveis->save($nivel)) {
                
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu artigo.'));
        }
        $this->set('nivel', $nivel);
    }
    public function view($id = null)
    {
        $nivel = $this->Niveis->get($id);
        $this->set(compact('nivel'));
    }
    public function edit($id = null)
    {
        $nivel = $this->Niveis->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Niveis->patchEntity($nivel, $this->request->getData());
            if ($this->Niveis->save($nivel)) {
                
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(('Seu artigo não pôde ser atualizado.'));
        }

        $this->set('nivel', $nivel);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $nivel = $this->Niveis->get($id);
        if ($this->Niveis->delete($nivel)) {

            return $this->redirect(['action' => 'index']);
        }
    }
     
    
}