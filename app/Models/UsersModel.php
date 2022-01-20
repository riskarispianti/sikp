<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id_u';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_u', 'gbr_u', 'username_u', 'password_u', 'updated_at'];
    protected $useTimestamps = true;
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);

        return $data;
    }
    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);

        return $data;
    }
    protected function passwordHash(array $data)
    {
        if (isset($data['data']['password_u']))
            $data['data']['password_u'] = password_hash($data['data']['password_u'], PASSWORD_DEFAULT);

        return $data;
    }

    public function reset(array $data, $username)
    {
        $data = $this->where->get($data, $username);
    }
}
