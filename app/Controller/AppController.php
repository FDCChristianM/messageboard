<?php

App::uses('Controller', 'Controller');
App::uses('AuthComponent', 'Controller/Component');
class AppController extends Controller {
    // public $components = array(
    //     'Auth' => array(
    //         'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'dashboard'),
    //         'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
    //     )
    // );

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'register'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
            'authorize' => array('Controller'),
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'Users', // Update the userModel value to 'Users'
                    'fields' => array(
                        'email' => 'email', // Assuming 'email' is the field name for email in the database
                        'password' => 'password'
                    )
                )
            )
        )
    );
    
}