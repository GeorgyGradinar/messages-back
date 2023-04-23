<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class ContactRequestFirst
{
    protected $name;
    protected $body;

    public function create($data) {
        $this -> name = $data -> name;
        $this -> body = $data -> request_body;
    }

    public function save() {
        DB::insert('insert into requests (name, request_body) values(?, ?)', [$this -> name, $this -> body]);
    }
}
