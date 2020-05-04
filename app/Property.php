<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;
use TCG\Voyager\Traits\Translatable;

class Property extends Model
{
    use Translatable;
    use Spatial;

    protected $spatial = ['coordinates'];
    protected $translatable = ['summary', 'content'];

    public function fetchByCountry()
    {
        return;
    }
}
