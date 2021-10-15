<?php

namespace App\Models;

use CodeIgniter\Model;

class GroupsModel extends Model
{
    protected $table                = 'groups';
    protected $primaryKey           = 'id';

    protected $useAutoIncrement     = true;

    protected $returnType           = 'object';

    protected $useSoftDeletes       = false;
    protected $allowedFields        = ['name'];

    // Dates
    protected $useTimestamps        = true;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    // protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
