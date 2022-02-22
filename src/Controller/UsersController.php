<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\ORM\TableRegistry;
use Cake\Utility\Security;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function register()
    {
        if ($this->request->is('post')){
            $userTable  = TableRegistry::get('Users');
            $user = $userTable->newEntity();

            $username = $this->request->getData('name');
            $useremail = $this->request->getData('email');
            $userpass = ($this->request->getData('password'));
            $userrole = $this->request->getData('role');
            $usertoken = Security::hash(Security::randomBytes(32));

            $user->name = $username;
            $user->role = 'user';
            $user->email = $useremail;
            $user->img_name = 'user-default.jpg';
            $user->verified = "0";
            $user->password = $userpass;
            $user->token = $usertoken;
            $user->img_path = 'upload/user-default.jpg';


            $user->created = date('Y-m-d H:i:s');
            $user->modified= date('Y-m-d H:i:s');

            $userTable->save($user);


//            if ($userTable->save($user)){
//                $this->Flash->set('Successful registry!' ,['element'=>'success']);
//
//
//                Email::configTransport('mailtrap', [
//                    'host' => 'smtp.mailtrap.io',
//                    'port' => 2525,
//                    'username' => 'dbc651ae35924b',
//                    'password' => '88b3e51b5d131d',
//                    'className' => 'Smtp'
//                ]);
//                $email = new Email('default');
//                $email->transport('mailtrap');
//                $email->emailFormat('html');
//                $email->from('topsinpw@gmail.com', 'Kiruha64');
//                $email->subject('Confirm your email to activation your account');
//                $email->to($useremail);
//                $email->send('hello '.$username. '<br> Pleas click here to conform your account<br/>
//                <a href="http://myproj/users/verification/'.$usertoken.'">Verificate</a>
//                <br>Thank you<br/>');
//
//            }
//            else{
//                $this->Flash->set('Error registry!',['element'=>'error']);
//            }

        }
    }

    public function verification($token){
        $userTable = TableRegistry::get('Users');
        $verify = $userTable->find('all')->where(['token'=>$token])->first();
        $verify->verified = '1';
        $userTable->save($verify);
    }

    public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            else{
                $this->Flash->error(__('Invalid email or password, try again'));
            }
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }



    public function profile($id = null){
        $this->Users->find('all')->where(['id'=>$id]);
    }
}
