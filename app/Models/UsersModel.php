<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = User::class;
    //eliminar el campo pero solo por fecha, se debe tener deleted_at
    protected $useSoftDeletes = true;

    protected $allowedFields = ['username', 'email', 'password', 'id_group'];

    //codeigniter se encarga de la fechas
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    //https://codeigniter.com/user_guide/models/model.html
    //Specifying Callbacks To Run
    protected $beforeInsert = ['addGroup'];
    protected $assignGroup;

    protected function addGroup($data)
    {
        $data['data']['id_group'] = $this->assignGroup;
        return $data;
    }

    public function withGroup(string $group)
    {
        //llamando otra tabla y debolviendo en objeto
        //https://codeigniter.com/user_guide/database/results.html
        $row = $this->db->table('groups')->where('name', $group)->get()->getFirstRow();
        if ($row != null) {
            // d($row->id);
            $this->assignGroup = $row->id;
        }
    }
}
