<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpotlightVillas extends Model
{
    public static function spotlightVillas()
    {
        return SpotlightVillas::query()
            ->select('sv.*', 'p.*')
            ->from('spotlight_villas AS sv')
            ->leftJoin('properties as p', 'sv.property_id', '=', 'p.id')
            ->limit(2)
            ->orderBy('sv.created_at')
            ->get()
        ;
    }
}
