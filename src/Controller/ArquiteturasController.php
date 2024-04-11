<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Arquiteturas Controller
 *
 * @property \App\Model\Table\ArquiteturasTable $Arquiteturas
 * @method \App\Model\Entity\Arquitetura[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArquiteturasController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $arquiteturas = $this->paginate($this->Arquiteturas);

        $this->set(compact('arquiteturas'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Arquitetura id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arquitetura = $this->Arquiteturas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('arquitetura'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arquitetura = $this->Arquiteturas->newEmptyEntity();
        if ($this->request->is('post')) {
            $arquitetura = $this->Arquiteturas->patchEntity($arquitetura, $this->request->getData());
            if ($this->Arquiteturas->save($arquitetura)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $this->set(compact('arquitetura'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Arquitetura id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arquitetura = $this->Arquiteturas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arquitetura = $this->Arquiteturas->patchEntity($arquitetura, $this->request->getData());
            if ($this->Arquiteturas->save($arquitetura)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $this->set(compact('arquitetura'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Arquitetura id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arquitetura = $this->Arquiteturas->get($id);
        if ($this->Arquiteturas->delete($arquitetura)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
