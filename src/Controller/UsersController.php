<?php
/**
 * VipUS: Admin for sale vips services
 * Copyright (c) Herbert Hudson (https://github.com/herberthudson/VipUS)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Herbert Hudson (https://github.com/herberthudson/VipUS)
 * @license       MIT License
 */
?>
<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Response;
use Cake\Core\Configure;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    /**
     * @param \Cake\Event\Event $event
     * @return \Cake\Cake\Network\Response|null
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('add'); // allowing users to create account
    }

    /**
     *  Login method
     *
     * @return \Cake\Network\Response|null
     */
    public function login()
    {
        $this->set('form_templates', Configure::read('Templates'));
        // setting layout login
        $this->viewBuilder()->layout('login');
        // checking if request is post
        if ($this->request->is('post')) {
            // identifying user
            $user = $this->Auth->identify();
            if ($user) {
                $user['profile'] = $this->Users->Profiles->find()->select(['id', 'name', 'surname', 'photo', 'dir'])->first();
                // TODO: add last login
                // logging user and adding on session
                $this->Auth->setUser($user);
                // redirecting user logged in
                return $this->redirect($this->Auth->redirectUrl());
            }
            // show message if login fail
            $this->Flash->error(__('Invalide username or password, try again'));
        }
    }

    /**
     * Logout method
     *
     */
    public function logout()
    {
        // logout User
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $user = $this->Users->get($this->Auth->user('id'), [
            'contain' => ['Profiles']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function view($id = null)
    // {
    //
    //     $user = $this->Users->get($id, [
    //         'contain' => ['Orders', 'Profiles']
    //     ]);
    //
    //     $this->set('user', $user);
    //     $this->set('_serialize', ['user']);
    // }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        // TODO: clear password fields after fail in create account
        $this->set('form_templates', Configure::read('Templates'));
        // setting layout login
        $this->viewBuilder()->layout('login');
        $user = $this->Users->newEntity();
        // setting type account
        $this->request->data['role'] = 'client';
        // setting default user image
        $this->request->data['profile']['photo'] = 'user.png';
        if ($this->request->is('post')) {
            // TODO: check if terms is agree
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                // TODO: add method to check link for activation of account
                // TODO: send email to active account
                // TODO: change flash mensage to warning about email link
                $this->Flash->success(__('The account has been created.'));

                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'logout']);
    }

    // TODO: add reset password
    // public function resetPassword()
    // {}

    // TODO: add new password method after reset password
    // TODO: remove token_forgot after change password
    // public function newPassword()
    // {}
}
