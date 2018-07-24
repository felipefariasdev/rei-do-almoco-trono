<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->Auth->allow(['add']);
    }

    public function isAuthorized($user)
    {
        $action = $this->request->params['action'];

        if (in_array($action, ['logout', 'login'])) {
            return true;
        }

        // Todas as outras ações requerem um id.
        if (!$this->request->getParam('pass.0')) {
            return false;
        }

        return parent::isAuthorized($user);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->id = $this->Auth->user('id');
            if ($this->Users->save($user)) {
                $this->Flash->success('Salvo com sucesso!');
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error('Erro ao tentar salvar.');
        }
        $this->set(compact('user'));
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Email e senha não estão registrados.');
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
