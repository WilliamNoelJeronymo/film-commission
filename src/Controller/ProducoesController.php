<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Producoes Controller
 *
 * @property \App\Model\Table\ProducoesTable $Producoes
 * @method \App\Model\Entity\Produco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProducoesController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $producoes = $this->paginate($this->Producoes);

        $this->set(compact('producoes'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Produco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produco = $this->Producoes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('produco'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produco = $this->Producoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $produco = $this->Producoes->patchEntity($produco, $this->request->getData());
            if ($this->Producoes->save($produco)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $this->set(compact('produco'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Produco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produco = $this->Producoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produco = $this->Producoes->patchEntity($produco, $this->request->getData());
            if ($this->Producoes->save($produco)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $this->set(compact('produco'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Produco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produco = $this->Producoes->get($id);
        if ($this->Producoes->delete($produco)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
