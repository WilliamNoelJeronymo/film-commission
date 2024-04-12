<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Escolas Controller
 *
 * @method \App\Model\Entity\Escola[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EscolasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $escolas = $this->paginate($this->Escolas);

        $this->set(compact('escolas'));
    }

    /**
     * View method
     *
     * @param string|null $id Escola id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $escola = $this->Escolas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('escola'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $escola = $this->Escolas->newEmptyEntity();
        if ($this->request->is('post')) {
            $escola = $this->Escolas->patchEntity($escola, $this->request->getData());
            if ($this->Escolas->save($escola)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $this->set(compact('escola'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Escola id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $escola = $this->Escolas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $escola = $this->Escolas->patchEntity($escola, $this->request->getData());
            if ($this->Escolas->save($escola)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $this->set(compact('escola'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Escola id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $escola = $this->Escolas->get($id);
        if ($this->Escolas->delete($escola)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
