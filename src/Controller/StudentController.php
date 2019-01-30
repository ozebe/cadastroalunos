<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Student Controller
 *
 * @property \App\Model\Table\StudentTable $Student
 *
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */


     public function initialize()
     {
         parent::initialize();
         $this->loadModel('Student');
         $this->loadComponent('Flash');
     }

    public function index()
    {
        $student = $this->paginate($this->Student);

        $this->set(compact('student'));
    }

    /**
     * View method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $student = $this->Student->get($id, [
            'contain' => []
        ]);

        $this->set('student', $student);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $student = $this->Student->newEntity();
        if ($this->request->is('post')) {
            // Upload image

            $student = $this->Student->patchEntity($student, $this->request->getData());
            if ($this->Student->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $this->set(compact('student'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */


    public function edit($id = null)
    {
        $student = $this->Student->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $student = $this->Student->patchEntity($student, $this->request->getData());
            if ($this->Student->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $this->set(compact('student'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $student = $this->Student->get($id);
        if ($this->Student->delete($student)) {
            $this->Flash->success(__('The student has been deleted.'));
        } else {
            $this->Flash->error(__('The student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        $action = $this->request->params['action'];

        // As ações add e index são permitidas sempre.
        if (in_array($action, ['index', 'view', 'add', 'edit', 'logout'])) {
            return true;
        }
        // Todas as outras ações requerem um id.
        if (!$this->request->getParam('pass.0')) {
            return false;
        }

        // Checa se o bookmark pertence ao user atual.
        $id = $this->request->getParam('pass.0');
        $user = $this->Users->get($id);
        if ($user->user_id == $user['id']) {
            return true;
        }
        return parent::isAuthorized($user);
    }

    public function logout()
    {
        $this->Flash->success('Você saiu do Sistema!');
        return $this->redirect($this->Auth->logout());
    }
}
