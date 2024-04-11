<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Profissionais Controller
 *
 * @property \App\Model\Table\ProfissionaisTable $Profissionais
 * @method \App\Model\Entity\Profissionai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfissionaisController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios'],
        ];
        $profissionais = $this->paginate($this->Profissionais);

        $this->set(compact('profissionais'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Profissionai id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profissionai = $this->Profissionais->get($id, [
            'contain' => ['Usuarios', 'ServicosPrestados'],
        ]);

        $this->set(compact('profissionai'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profissionai = $this->Profissionais->newEmptyEntity();
        if ($this->request->is('post')) {
            $profissionai = $this->Profissionais->patchEntity($profissionai, $this->request->getData());
            if ($this->Profissionais->save($profissionai)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $usuarios = $this->Profissionais->Usuarios->find('list', ['limit' => 200])->all();
        $servicosPrestados = $this->Profissionais->ServicosPrestados->find('list', ['limit' => 200])->all();
        $this->set(compact('profissionai', 'usuarios', 'servicosPrestados'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Profissionai id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profissionai = $this->Profissionais->get($id, [
            'contain' => ['ServicosPrestados'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profissionai = $this->Profissionais->patchEntity($profissionai, $this->request->getData());
            if ($this->Profissionais->save($profissionai)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $usuarios = $this->Profissionais->Usuarios->find('list', ['limit' => 200])->all();
        $servicosPrestados = $this->Profissionais->ServicosPrestados->find('list', ['limit' => 200])->all();
        $this->set(compact('profissionai', 'usuarios', 'servicosPrestados'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Profissionai id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profissionai = $this->Profissionais->get($id);
        if ($this->Profissionais->delete($profissionai)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
