<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Textfield extends Model
{
    public function pages() {
      return $this->belongsTo('App\Page');
    }
}
