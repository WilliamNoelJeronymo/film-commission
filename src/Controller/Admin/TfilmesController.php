<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tfilmes Controller
 *
 * @property \App\Model\Table\TfilmesTable $Tfilmes
 * @method \App\Model\Entity\Tfilme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TfilmesController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tfilmes = $this->paginate($this->Tfilmes);

        $this->set(compact('tfilmes'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Tfilme id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tfilme = $this->Tfilmes->get($id, [
            'contain' => ['Tlocacoes'],
        ]);

        $this->set(compact('tfilme'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tfilme = $this->Tfilmes->newEmptyEntity();
        if ($this->request->is('post')) {
            $tfilme = $this->Tfilmes->patchEntity($tfilme, $this->request->getData());
            if ($this->Tfilmes->save($tfilme)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $tlocacoes = $this->Tfilmes->Tlocacoes->find('list', ['limit' => 200])->all();
        $this->set(compact('tfilme', 'tlocacoes'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Tfilme id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tfilme = $this->Tfilmes->get($id, [
            'contain' => ['Tlocacoes'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tfilme = $this->Tfilmes->patchEntity($tfilme, $this->request->getData());
            if ($this->Tfilmes->save($tfilme)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $tlocacoes = $this->Tfilmes->Tlocacoes->find('list', ['limit' => 200])->all();
        $this->set(compact('tfilme', 'tlocacoes'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Tfilme id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tfilme = $this->Tfilmes->get($id);
        if ($this->Tfilmes->delete($tfilme)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
