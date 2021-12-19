<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id_u';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'gbr_u', 'username_u', 'password_u'];
    protected $useTimestamps = true;

    public function auth_l($username_u, $password_u)
    {
        return $this->db->table('users')->where([
            'username_u' => $username_u,
            'password_u' => md5($password_u)
        ])->get()->getRowArray();
    }
}
