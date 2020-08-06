<?php

namespace App\Blog\BaseApp;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model {

    public function getData() {
        return $this;
    }

}
