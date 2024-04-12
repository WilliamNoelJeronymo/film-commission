<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tlocacoes Controller
 *
 * @property \App\Model\Table\TlocacoesTable $Tlocacoes
 * @method \App\Model\Entity\Tlocaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TlocacoesController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tlocacoes = $this->paginate($this->Tlocacoes);

        $this->set(compact('tlocacoes'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Tlocaco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tlocaco = $this->Tlocacoes->get($id, [
            'contain' => ['Tfilmes'],
        ]);

        $this->set(compact('tlocaco'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tlocaco = $this->Tlocacoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $tlocaco = $this->Tlocacoes->patchEntity($tlocaco, $this->request->getData());
            if ($this->Tlocacoes->save($tlocaco)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $tfilmes = $this->Tlocacoes->Tfilmes->find('list', ['limit' => 200])->all();
        $this->set(compact('tlocaco', 'tfilmes'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Tlocaco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tlocaco = $this->Tlocacoes->get($id, [
            'contain' => ['Tfilmes'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tlocaco = $this->Tlocacoes->patchEntity($tlocaco, $this->request->getData());
            if ($this->Tlocacoes->save($tlocaco)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $tfilmes = $this->Tlocacoes->Tfilmes->find('list', ['limit' => 200])->all();
        $this->set(compact('tlocaco', 'tfilmes'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Tlocaco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tlocaco = $this->Tlocacoes->get($id);
        if ($this->Tlocacoes->delete($tlocaco)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
