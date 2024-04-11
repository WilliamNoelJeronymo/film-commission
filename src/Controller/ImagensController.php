<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Imagens Controller
 *
 * @property \App\Model\Table\ImagensTable $Imagens
 * @method \App\Model\Entity\Imagen[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImagensController extends AppController
{
        /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Profissionais', 'Producoes', 'Noticias', 'Locacoes'],
        ];
        $imagens = $this->paginate($this->Imagens);

        $this->set(compact('imagens'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Imagen id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagen = $this->Imagens->get($id, [
            'contain' => ['Profissionais', 'Producoes', 'Noticias', 'Locacoes'],
        ]);

        $this->set(compact('imagen'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagen = $this->Imagens->newEmptyEntity();
        if ($this->request->is('post')) {
            $imagen = $this->Imagens->patchEntity($imagen, $this->request->getData());
            if ($this->Imagens->save($imagen)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $profissionais = $this->Imagens->Profissionais->find('list', ['limit' => 200])->all();
        $producoes = $this->Imagens->Producoes->find('list', ['limit' => 200])->all();
        $noticias = $this->Imagens->Noticias->find('list', ['limit' => 200])->all();
        $locacoes = $this->Imagens->Locacoes->find('list', ['limit' => 200])->all();
        $this->set(compact('imagen', 'profissionais', 'producoes', 'noticias', 'locacoes'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Imagen id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagen = $this->Imagens->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagen = $this->Imagens->patchEntity($imagen, $this->request->getData());
            if ($this->Imagens->save($imagen)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar. Por favor, tente novamente.'));
        }
        $profissionais = $this->Imagens->Profissionais->find('list', ['limit' => 200])->all();
        $producoes = $this->Imagens->Producoes->find('list', ['limit' => 200])->all();
        $noticias = $this->Imagens->Noticias->find('list', ['limit' => 200])->all();
        $locacoes = $this->Imagens->Locacoes->find('list', ['limit' => 200])->all();
        $this->set(compact('imagen', 'profissionais', 'producoes', 'noticias', 'locacoes'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Imagen id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagen = $this->Imagens->get($id);
        if ($this->Imagens->delete($imagen)) {
            $this->Flash->success(__('Excluido com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao excluir. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
