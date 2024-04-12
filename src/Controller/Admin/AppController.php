<?php
declare(strict_types=1);

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

namespace App\Controller\Admin;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');

        /* COMPONENTE DE AUTENTICAÇÃO */
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Usuarios',
                    'fields' => ['username' => 'email', 'password' => 'senha']
                ]
            ],
            'loginAction' => [
                'controller' => 'Usuarios',
                'action' => 'login',
            ],
            'loginRedirect' => [
                'controller' => 'Locacoes',
                'action' => 'index',
            ],
            'logoutRedirect' => [
                'prefix' => false,
                'controller' => 'Noticias',
                'action' => 'home',
            ],
            'authError' => 'Você nao tem permissão para acessar essa área.',
            'flash' => [
                'key' => 'auth',
                'element' => 'error'
            ]
            //'authorize' => 'Controller'
        ]);
        
    }
    public function isAuthorized($usuario = null)
    {
        /* SO PERMITE SE FOR DO GRUPO ADMIN */
        if ($usuario['grupos_id'] == 1) {
            return true;
        }
        return false;
    }
}
