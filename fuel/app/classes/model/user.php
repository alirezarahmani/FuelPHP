<?php
use Orm\Model;

class model_user extends Model
{
    protected static $_properties = array(
        'id',
        'username',
        'password',
        'email',
        'profile_fields',
        'last_login',
        'created_at',
        'updated_at',
    );

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => false,
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_save'),
            'mysql_timestamp' => false,
        ),
    );

    public static function validate($factory)
    {
        $val = Validation::forge($factory);
        $val->add_field('username', 'Username', 'required|max_length[255]');
        $val->add_field('password', 'Password', 'required|max_length[255]');
        $val->add_field('email', 'Email', 'required|valid_email|max_length[255]');
        $val->add_field('profile_fields', 'Profile Fields', 'required');
        $val->add_field('last_login', 'Last Login', 'required|valid_string[numeric]');

        return $val;
    }

}
