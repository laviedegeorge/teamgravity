<?php
class Users
{
    private static $instance;
    private $users;
    private function __construct()
    {
        $this->users = json_decode(file_get_contents("../db/users.json"));
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Users;
        }
        return self::$instance;
    }

    public function login($email, $password)
    {
        $users = $this->loadUsers();
        $user = null;
        foreach ($users as $users1 => $user) {
            $user = array_filter($user, function ($array) use ($email, $password) {
                if (strtolower($array->email) == strtolower($email) && $array->password == $password) {
                    return $array;
                }
            });
        }
        return $user;
    }

    public function signup($data)
    {
        $users = $this->loadUsers();
        if (!$this->is_email_exist($data['email'])) {
            array_push($users->users, $data);
            $json_users = json_encode($users);
            file_put_contents("../db/users.json", $json_users);
            return $this->login($data['email'], $data['password']);
        } else {
            return false;
        }
    }

    public function is_email_exist($email)
    {
        $users = $this->loadUsers();
        foreach ($users as $users1 => $user) {
            $user = array_filter($user, function ($array) use ($email) {
                if ($array->email == $email) {
                    return $array;
                }
            });
        }
        return $user ? true : false;
    }

    public function loadUsers()
    {
        return json_decode(file_get_contents("../db/users.json"));
    }
}