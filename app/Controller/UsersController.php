<?php
App::uses('AppController', 'Controller');
App::uses('Router', 'Routing');
App::uses('AuthComponent', 'Controller/Component');

class UsersController extends AppController {
    public $uses = array('Users', 'Login');


    public function beforeFilter() {
        parent::beforeFilter();
        $this->baseUrl = Router::url('/', true);
        $this->Auth->allow('login', 'logout', 'register', 'registerUser', 'authenticate', 'dashboard', 'myProfile');
    }

    public function index(){
        $this->render('/Pages/login');
    }

    private function checkSession() {
        if (CakeSession::check('user')) {
            return true;
        } else {
            $this->redirect(array('action' => 'index'));
            return false;
        }
    }    

    public function dashboard(){
        if ($this->checkSession()) {
            $this->render('/Pages/dashboard');
        }
    }

    public function myProfile(){
        if ($this->checkSession()) {
            $this->render('/Pages/myProfile');
        }
    }

    public function authenticate() {
        if ($this->request->is("post")) {
            $email = $this->request->data["email"];
            $password = $this->request->data["password"];
    
            $this->Login->set($this->request->data); // Set the model data for validation
            if ($this->Login->validates()) { // Perform model validation
                $user = $this->Users->findByEmail($email);
                if (!empty($user)) {
                    // Verify the password
                    if ($user['Users']["password"] === Security::hash($password, "sha1", true)) {
                        // Update last_login using raw query
                        $userId = $user['Users']['user_id'];
                        $lastLogin = date('Y-m-d H:i:s');
                        $query = "UPDATE users SET last_login = '{$lastLogin}' WHERE user_id = {$userId}";
                        $this->Users->query($query);

                        $response = array('status' => 'success');
                        $this->Session->write('user', $user['Users']['user_id']);
                    } else {
                        $response = array('status' => 'error', 'errors' => array('password' => array('Invalid password.')));
                    }
                } else {
                    $response = array('status' => 'error', 'errors' => array('email' => array('User does not exist.')));
                }
            } else {
                // Echo validation errors
                $errors = $this->Login->validationErrors;
                $response = array('status' => 'error', 'errors' => $errors);
            }
    
            echo json_encode($response);
        }
        $this->autoRender = false;
    }    


    public function register(){
        $this->set('baseUrl', $this->baseUrl);
        $this->render('/Pages/register');
    }

    public function registerUser(){
        if ($this->request->is('post')) {
            $this->Users->set($this->request->data); // Set the model data for validation
            if ($this->Users->validates()) { // Perform model validation
                $this->Users->save($this->request->data); //insert data
                $response = array('status' => 'success', 'message' => 'Registration successful.');
            } else {
                // Echo validation errors
                $errors = $this->Users->validationErrors;
                $response = array('status' => 'error', 'errors' => $errors);
            }

            echo json_encode($response);
        }

        $this->autoRender = false;
    }

    public function logout() {
        $this->Session->delete('user'); 
        return $this->redirect($this->Auth->logout());
    }
}
