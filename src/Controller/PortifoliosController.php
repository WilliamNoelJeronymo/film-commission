<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Portifolios Controller
 *
 * @property \App\Model\Table\PortifoliosTable $Portifolios
 * @method \App\Model\Entity\Portifolio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PortifoliosController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Profissionais'],
        ];
        $portifolios = $this->paginate($this->Portifolios);

        $this->set(compact('portifolios'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Portifolio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $portifolio = $this->Portifolios->get($id, [
            'contain' => ['Profissionais'],
        ]);

        $this->set(compact('portifolio'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $portifolio = $this->Portifolios->newEmptyEntity();
        if ($this->request->is('post')) {
            $portifolio = $this->Portifolios->patchEntity($portifolio, $this->request->getData());
            if ($this->Portifolios->save($portifolio)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $profissionais = $this->Portifolios->Profissionais->find('list', ['limit' => 200])->all();
        $this->set(compact('portifolio', 'profissionais'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Portifolio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $portifolio = $this->Portifolios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $portifolio = $this->Portifolios->patchEntity($portifolio, $this->request->getData());
            if ($this->Portifolios->save($portifolio)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $profissionais = $this->Portifolios->Profissionais->find('list', ['limit' => 200])->all();
        $this->set(compact('portifolio', 'profissionais'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Portifolio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $portifolio = $this->Portifolios->get($id);
        if ($this->Portifolios->delete($portifolio)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
