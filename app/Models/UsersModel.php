<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;
use App\Entities\UserInfo;

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
    protected $afterInsert = ['storeUserInfo'];
    protected $assignGroup;
    protected $infoUser;

    protected function storeUserInfo($data)
    {
        //llamar el id registrado
        $this->infoUser->id_user = $data['id'];
        //llamar al modelo
        $model = model('UsersInfoModel');
        //llamar a la entidad userInfo he inserta a su tabla
        $model->insert($this->infoUser);
    }

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

    public function addUserInfo(UserInfo $ui)
    {
        $this->infoUser = $ui;
    }

    //modelo para buscar usuarios
    public function getUserBy(string $colum, string $value)
    {
        return $this->where($colum, $value)->first();
    }
}
