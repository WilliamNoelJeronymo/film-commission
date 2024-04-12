<?php
declare(strict_types=1);

namespace App\Controller\Admin;

/**
 * Locacoes Controller
 *
 * @property \App\Model\Table\LocacoesTable $Locacoes
 * @method \App\Model\Entity\Locaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LocacoesController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bairros', 'Arquiteturas', 'Usuarios'],
        ];
        $locacoes = $this->paginate($this->Locacoes);

        $this->set(compact('locacoes'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Locaco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $locaco = $this->Locacoes->get($id, [
            'contain' => ['Bairros', 'Arquiteturas', 'Usuarios', 'Tipos'],
        ]);

        $this->set(compact('locaco'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $locaco = $this->Locacoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $locaco = $this->Locacoes->patchEntity($locaco, $this->request->getData());
            if ($this->Locacoes->save($locaco)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $bairros = $this->Locacoes->Bairros->find('list', ['limit' => 200])->all();
        $arquiteturas = $this->Locacoes->Arquiteturas->find('list', ['limit' => 200])->all();
        $usuarios = $this->Locacoes->Usuarios->find('list', ['limit' => 200])->all();
        $tipos = $this->Locacoes->Tipos->find('list', ['limit' => 200])->all();
        $this->set(compact('locaco', 'bairros', 'arquiteturas', 'usuarios', 'tipos'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Locaco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $locaco = $this->Locacoes->get($id, [
            'contain' => ['Tipos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $locaco = $this->Locacoes->patchEntity($locaco, $this->request->getData());
            if ($this->Locacoes->save($locaco)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $bairros = $this->Locacoes->Bairros->find('list', ['limit' => 200])->all();
        $arquiteturas = $this->Locacoes->Arquiteturas->find('list', ['limit' => 200])->all();
        $usuarios = $this->Locacoes->Usuarios->find('list', ['limit' => 200])->all();
        $tipos = $this->Locacoes->Tipos->find('list', ['limit' => 200])->all();
        $this->set(compact('locaco', 'bairros', 'arquiteturas', 'usuarios', 'tipos'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Locaco id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $locaco = $this->Locacoes->get($id);
        if ($this->Locacoes->delete($locaco)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
