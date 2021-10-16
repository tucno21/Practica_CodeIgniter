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
}