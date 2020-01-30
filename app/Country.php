<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Country extends Model
{
    use Translatable;
    protected $translatable = ['name'];
}
