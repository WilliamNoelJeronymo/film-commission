<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ServicosPrestados Controller
 *
 * @property \App\Model\Table\ServicosPrestadosTable $ServicosPrestados
 * @method \App\Model\Entity\ServicosPrestado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServicosPrestadosController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $servicosPrestados = $this->paginate($this->ServicosPrestados);

        $this->set(compact('servicosPrestados'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Servicos Prestado id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servicosPrestado = $this->ServicosPrestados->get($id, [
            'contain' => ['Profissionais'],
        ]);

        $this->set(compact('servicosPrestado'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servicosPrestado = $this->ServicosPrestados->newEmptyEntity();
        if ($this->request->is('post')) {
            $servicosPrestado = $this->ServicosPrestados->patchEntity($servicosPrestado, $this->request->getData());
            if ($this->ServicosPrestados->save($servicosPrestado)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $profissionais = $this->ServicosPrestados->Profissionais->find('list', ['limit' => 200])->all();
        $this->set(compact('servicosPrestado', 'profissionais'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Servicos Prestado id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servicosPrestado = $this->ServicosPrestados->get($id, [
            'contain' => ['Profissionais'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicosPrestado = $this->ServicosPrestados->patchEntity($servicosPrestado, $this->request->getData());
            if ($this->ServicosPrestados->save($servicosPrestado)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $profissionais = $this->ServicosPrestados->Profissionais->find('list', ['limit' => 200])->all();
        $this->set(compact('servicosPrestado', 'profissionais'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Servicos Prestado id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servicosPrestado = $this->ServicosPrestados->get($id);
        if ($this->ServicosPrestados->delete($servicosPrestado)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
