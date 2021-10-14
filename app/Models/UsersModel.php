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
}
