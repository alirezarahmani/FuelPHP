<?php
class controller_users extends Controller_Common
{
    public function action_index()
    {
        $data['users'] = Model_User::find('all');

        $this->template->title = "Users";

        $this->template->content = View::forge('users/index', $data);
    }

    public function action_login()
    {
        if (Auth::check()) {
            Response::redirect('/');
        }
        $val = Validation::forge('users');
        $val->add_field('username', 'Your username', 'required|min_length[3]|max_length[20]');
        $val->add_field('password', 'Your password', 'required|min_length[3]|max_length[20]');

        if ($val->run()) {
            $auth = Auth::instance();
            if ($auth->login($val->validated('username'), $val->validated('password'))) {
                Session::set_flash('notice', 'FLASH: logged in');
                Response::redirect('users');
            } else {
                $data['username'] = $val->validated('username');

                $data['errors'] = 'Wrong username/password. Try again';
            }
        } else {
            if ($_POST) {
                $data['username'] = $val->validated('username');
                $data['errors'] = 'Wrong username/password combo. Try again';
            } else {
                $data['errors'] = false;
            }
        }
       $this->template->errors = $data['errors'];
        $this->template->content = View::forge('users/login')->set($data);
    }

    public function action_view($id = null)
    {
        $data['user'] = Model_User::find($id);
        $this->template->title = "User";
        $this->template->content = View::forge('users/view', $data);
    }
    public function action_logout()
    {
        Auth::instance()->logout();
        Response::redirect('/');
    }
}
