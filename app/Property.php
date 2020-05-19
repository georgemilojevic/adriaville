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

    /**
     * @param string $country
     * @param int $limit
     * @return array
     * @throws \Exception
     */
    public static function fetchByCountry(string $country, int $limit = 6)
    {
        $today = new \DateTime('NOW');

        /** @var Country $countryName */
        $countryName = Country::where('name', $country)->first();

        if (!empty($countryName)) {
            return Property::where('published_at', '<',  $today->format('Y-m-d H:i:s'))
                ->where('country_id', '=', $countryName->id)
                ->orderBy('id', 'desc')
                ->limit($limit)
                ->get();
        }

        return [];
    }

    /**
     * The facilities that belong to the property.
     */
    public function facilities()
    {
        return $this->belongsToMany('App\Facility');
    }
}
