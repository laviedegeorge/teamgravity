<?php
class Users
{
    private static $instance;

    private function __construct()
    {
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
        $users = json_decode(file_get_contents("../db/users.json"));
        $user = null;
        foreach ($users as $users1 => $user) {
            $user = array_filter($user, function ($array) use ($email, $password) {
                if ($array->email == $email && $array->password == $password) {
                    return $array;
                }
            });
        }
        return $user;
    }
}