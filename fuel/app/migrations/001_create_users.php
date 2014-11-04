<?php

namespace Fuel\Migrations;
class 001_create_users
{
    public function up()
    {
     \DBUtil::create_table('users', array(
            'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
            'username' => array('constraint' => 255, 'type' => 'varchar'),
            'password' => array('constraint' => 255, 'type' => 'varchar'),
            'email' => array('constraint' => 255, 'type' => 'varchar'),
            'last_login' => array('constraint' => 20, 'type' => 'int'),
            'profile_fields' => array('constraint' => 255, 'type' => 'varchar'),
            'created_at' => array('constraint' => 255, 'type' => 'varchar'),
            'updated_at' => array('constraint' => 255, 'type' => 'varchar')
        ), array('id'));

        $username = "AwesomeAlireza";$password = "@awesomeAlireza@";$pass_hash= \Auth::instance()->hash_password($password);
        $email    = "Alireza@is-awesome.com";

        $users = \Model_User::forge(array(
            'username' => $username,

            'password' => $pass_hash,

            'email' => $email,

            'profile_fields' => '',

            'last_login' => ''
        ));

        if ($users and $users->save())
            \Cli::write("the user has been created");
         else
            \Cli::write("failed to create user");

    }
    public function down()

    {
        \DBUtil::drop_table('users');

    }

}
