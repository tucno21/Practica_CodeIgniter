<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class PostEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = [
        'created_at',
        'updated_at',
        'deleted_at',
        'published_at',
    ];
    protected $casts   = [];

    protected function setSlug(string $title)
    {
        //https://codeigniter.com/user_guide/helpers/url_helper.html?highlight=url_title#url_title
        $slug = mb_url_title($title, '-');

        $postModel = model('PostModel');

        while ($postModel->where('slug', $slug)->first() != null) {
            //https://codeigniter.com/user_guide/helpers/text_helper.html
            $slug = increment_string($slug, '_');
        }

        $this->attributes['slug'] = $slug;
    }

    protected function getAuthor()
    {
        if (!empty($this->attributes['id_author'])) {
            $uiModel = model('UsersInfoModel');
            return $uiModel->where('id_user', $this->attributes['id_author'])->first();
        }
        return  $this;
    }

    public function getCategories()
    {
        $cpModel = model('CategoriesPosts');
        return $cpModel->where('id_post', $this->id)->join('categories', 'categories.id = categories_posts.id_category')->findAll() ?? [];
        // dd($bbbb);
    }

    public function getLink()
    {
        return base_url('cover/' . $this->cover);
    }
}
