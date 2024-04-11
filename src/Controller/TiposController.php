<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipos Controller
 *
 * @property \App\Model\Table\TiposTable $Tipos
 * @method \App\Model\Entity\Tipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipos = $this->paginate($this->Tipos);

        $this->set(compact('tipos'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipo = $this->Tipos->get($id, [
            'contain' => ['Locacoes'],
        ]);

        $this->set(compact('tipo'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipo = $this->Tipos->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipo = $this->Tipos->patchEntity($tipo, $this->request->getData());
            if ($this->Tipos->save($tipo)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $locacoes = $this->Tipos->Locacoes->find('list', ['limit' => 200])->all();
        $this->set(compact('tipo', 'locacoes'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipo = $this->Tipos->get($id, [
            'contain' => ['Locacoes'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipo = $this->Tipos->patchEntity($tipo, $this->request->getData());
            if ($this->Tipos->save($tipo)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $locacoes = $this->Tipos->Locacoes->find('list', ['limit' => 200])->all();
        $this->set(compact('tipo', 'locacoes'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipo = $this->Tipos->get($id);
        if ($this->Tipos->delete($tipo)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
