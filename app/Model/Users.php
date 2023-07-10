<?php
App::uses('Security', 'Utility');

class Users extends Model {
    public $useTable = 'users';
    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => 'notBlank',
                'required' => true,
                'message' => 'Please enter a name.'
            ),
            'range' => array(
                'rule' => array('between', 5, 20),
                'required' => true,
                'message' => 'Name should be between 5 and 20 characters.'
            )
        ),
        'email' => array(
            'notEmpty' => array(
                'rule' => 'notBlank',
                'required' => true,
                'message' => 'Please enter an email.'
            ),
            'email' => array(
                'rule' => 'email',
                'required' => true,
                'message' => 'Please enter a valid email address.'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'This email address is already taken.'
            )
        ),
        'password' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => 'Please enter a password.'
        ),
        'cpwd' => array(
            'matchPasswords' => array(
                'rule' => array('matchPasswords'),
                'required' => true,
                'message' => 'Passwords do not match.'
            )
        )
    );

    // Custom validation method for matching passwords
    public function matchPasswords($check) {
        $password = $this->data[$this->alias]['password'];
        $confirmPassword = $this->data[$this->alias]['cpwd'];

        return ($password === $confirmPassword);
    }

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHash = Security::hash($this->data[$this->alias]['password'], null, true);
            $this->data[$this->alias]['password'] = $passwordHash;
        }
        return true;
    }
}
