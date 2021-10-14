<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    // protected $datamap = [];
    protected $dates   = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    // protected $casts   = [];

    //https://codeigniter4.github.io/userguide/models/entities.html#create-the-entity-class
    //nombre del attributes  primero con 'set' o 'get' - y el nombre
    protected function setPassword(string $pass)
    {
        $this->attributes['password'] = password_hash($pass, PASSWORD_BCRYPT);

        return $this;
    }

    public function generateUsername()
    {
        $this->attributes['username'] = explode(" ", $this->name)[0] . explode(" ", $this->surname)[0];
    }
}
