<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Noticias Controller
 *
 * @property \App\Model\Table\NoticiasTable $Noticias
 * @method \App\Model\Entity\Noticia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NoticiasController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $noticias = $this->paginate($this->Noticias);

        $this->set(compact('noticias'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $noticia = $this->Noticias->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('noticia'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $noticia = $this->Noticias->newEmptyEntity();
        if ($this->request->is('post')) {
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->getData());
            if ($this->Noticias->save($noticia)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $this->set(compact('noticia'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $noticia = $this->Noticias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->getData());
            if ($this->Noticias->save($noticia)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $this->set(compact('noticia'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $noticia = $this->Noticias->get($id);
        if ($this->Noticias->delete($noticia)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
