<?php

namespace App\Models;

use App\Entities\PostEntity;
use CodeIgniter\Model;

class PostModel extends Model
{

    protected $table                = 'posts';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;

    protected $returnType           = PostEntity::class;
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
    protected $allowedFields        = ['title', 'slug', 'body', 'cover', 'id_author', 'published_at'];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Callbacks
    protected $allowCallbacks       = true;
    protected $afterInsert          = [];
}
