<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Typecategories Controller
 *
 * @property \Admin\Model\Table\TypecategoriesTable $Typecategories
 *
 * @method \Admin\Model\Entity\Typecategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypecategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->set('title','Typecategories');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $typecategories = $this->paginate($this->Typecategories);

        $this->set(compact('typecategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Typecategory id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typecategory = $this->Typecategories->get($id, [
            'contain' => ['Categories'],
        ]);

        $this->set('typecategory', $typecategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typecategory = $this->Typecategories->newEntity();
        if ($this->request->is('post')) {
            $typecategory = $this->Typecategories->patchEntity($typecategory, $this->request->getData());
            if ($this->Typecategories->save($typecategory)) {
                $this->Flash->success(__('The typecategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typecategory could not be saved. Please, try again.'));
        }
        $categories = $this->Typecategories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('typecategory', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typecategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typecategory = $this->Typecategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typecategory = $this->Typecategories->patchEntity($typecategory, $this->request->getData());
            if ($this->Typecategories->save($typecategory)) {
                $this->Flash->success(__('The typecategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typecategory could not be saved. Please, try again.'));
        }
        $categories = $this->Typecategories->Categories->find('list', ['limit' => 200]);
        $this->set(compact('typecategory', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typecategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typecategory = $this->Typecategories->get($id);
        if ($this->Typecategories->delete($typecategory)) {
            $this->Flash->success(__('The typecategory has been deleted.'));
        } else {
            $this->Flash->error(__('The typecategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
