<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\UserInfo;

class UsersInfoModel extends Model
{
    protected $table                = 'info_users';
    protected $primaryKey           = 'id_user';

    protected $useAutoIncrement     = true;

    protected $returnType           = UserInfo::class;

    protected $useSoftDeletes       = false;
    protected $allowedFields        = ['name', 'surname', 'id_county'];

    // Dates
    protected $useTimestamps        = true;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
