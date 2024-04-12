<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Timagens Controller
 *
 * @property \App\Model\Table\TimagensTable $Timagens
 * @method \App\Model\Entity\Timagen[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TimagensController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tfilmes'],
        ];
        $timagens = $this->paginate($this->Timagens);

        $this->set(compact('timagens'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Timagen id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $timagen = $this->Timagens->get($id, [
            'contain' => ['Tfilmes'],
        ]);

        $this->set(compact('timagen'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $timagen = $this->Timagens->newEmptyEntity();
        if ($this->request->is('post')) {
            $timagen = $this->Timagens->patchEntity($timagen, $this->request->getData());
            if ($this->Timagens->save($timagen)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $tfilmes = $this->Timagens->Tfilmes->find('list', ['limit' => 200])->all();
        $this->set(compact('timagen', 'tfilmes'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Timagen id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $timagen = $this->Timagens->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $timagen = $this->Timagens->patchEntity($timagen, $this->request->getData());
            if ($this->Timagens->save($timagen)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $tfilmes = $this->Timagens->Tfilmes->find('list', ['limit' => 200])->all();
        $this->set(compact('timagen', 'tfilmes'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Timagen id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $timagen = $this->Timagens->get($id);
        if ($this->Timagens->delete($timagen)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
