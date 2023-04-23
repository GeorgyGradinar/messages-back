<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRequestSecond
{
    protected $name;
    protected $body;

    public function create($data) {
        $this -> name = $data -> name;
        $this -> body = $data -> request_body;
    }

    public function save() {
        return 'Success';
    }
}
