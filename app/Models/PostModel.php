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
    protected $afterInsert          = ['storeCategories'];

    public function storeCategories(array $data)
    {
        if (!empty($this->categories)) {
            $cpModel = model('CategoriesPosts');

            $cats = [];
            foreach ($this->categories as $cat) {
                $cats[] = [
                    'id_post'      => $data['id'],
                    'id_category'      => $cat,
                ];
            }
            // dd($cats);
            $cpModel->insertBatch($cats);
        }
        return $data;
    }


    protected $categories          = [];

    public function envioCategories(array $categories)
    {
        $this->categories = $categories;
    }

    public function publish()
    {
        $this->where('published_at <=', date('Y-m-d H:i:s'));
        return $this;
    }

    public function PostInfoUser()
    {
        $this->select('posts.*, UI.name AS nameInfo, UI.surname AS surnameInfo');
        $this->join('info_users AS UI', 'posts.id_author = UI.id_user');
        // $this->orderBy('posts.published_at', 'DESC');

        // $postUsers = $this->findAll();
        // return $postUsers;
        return $this;
    }
}
