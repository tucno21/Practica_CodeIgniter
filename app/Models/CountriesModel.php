<?php

namespace App\Models;

use CodeIgniter\Model;

class CountriesModel extends Model
{
    protected $table                = 'countries';
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
