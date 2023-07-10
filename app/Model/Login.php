<?php

class Login extends Model {
    public $useTable = 'users';
    public $validate = array(
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
            )
        ),
        'password' => array(
            'rule' => 'notBlank',
            'required' => true,
            'message' => 'Please enter a password.'
        )
    );
}
