<?php
/**
 * Created by PhpStorm.
 * User: Sonnv
 * Date: 12/30/13
 * Time: 10:43 AM
 */
class User extends AppModel
{
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A Username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A Password is required'
            )
        )
    );
}