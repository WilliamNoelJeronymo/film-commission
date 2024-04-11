<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bairros Controller
 *
 * @property \App\Model\Table\BairrosTable $Bairros
 * @method \App\Model\Entity\Bairro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BairrosController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bairros = $this->paginate($this->Bairros);

        $this->set(compact('bairros'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Bairro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bairro = $this->Bairros->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bairro'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bairro = $this->Bairros->newEmptyEntity();
        if ($this->request->is('post')) {
            $bairro = $this->Bairros->patchEntity($bairro, $this->request->getData());
            if ($this->Bairros->save($bairro)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $this->set(compact('bairro'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Bairro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bairro = $this->Bairros->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bairro = $this->Bairros->patchEntity($bairro, $this->request->getData());
            if ($this->Bairros->save($bairro)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $this->set(compact('bairro'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Bairro id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bairro = $this->Bairros->get($id);
        if ($this->Bairros->delete($bairro)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
