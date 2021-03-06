<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authorize' => 'Controller',
            'authenticate' => [
                'Form'=>[
                    'fields'=>['username'=>'email', 'password'=>'password'],
                    'scope'=>['verified'=>'1'],
                    'userModel'=> 'Users'
                ]
            ],
            'loginRedirect' => [
                'controller' => 'Home',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
            ],
            'storage'=>'Session',
        ]);

        $user_role = $this->Auth->user('role');
        $user_id = $this->Auth->user('id');

        $this->set(compact('user_role','user_id'));

        $this->loadModel('Admin.Categories');
        $menulists = $this->Categories->find('all');
        $this->set(compact('menulists'));

        $this->loadModel('Admin.Shifts');
        $statuses = $this->Shifts->find('all')->where(['user_id'=> $this->Auth->user('id')])->last();
        if (isset($statuses)){
            $status = $statuses->status;
            $this->set('status',$status);
        }
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }
    public function beforeFilter(Event $event)
    {
        $this->Auth->deny(['index']);
        $user_role = $this->Auth->user('role');
        if ($user_role != ''){
            $this->Auth->allow(['verification','search','logout',"login",'register','forgotpassword','resetpassword','index','add','view']);
        }
        if ($user_role == ''){
            $this->Auth->allow(['verification',"login",'register','forgotpassword','resetpassword','index','view']);
        }

    }

    public function isAuthorized($user)
    {
        if (!$this->request->getParam('prefix')) {
            return true;
        }
        if ($this->request->getParam('plugin')) {
            return false;
        }
    }


}
