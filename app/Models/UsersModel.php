<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    public function auth_l($username_u, $password_u)
    {
        return $this->db->table('users')->where([
            'username_u' => $username_u,
            'password_u' => md5($password_u)
        ])->get()->getRowArray();
    }
}
