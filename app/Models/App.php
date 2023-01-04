<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $_newid
 * @property string $_id
 * @property string $_oldid
 * @property string $name
 * @property string $orgId
 * @property string $description
 * @property string $image
 * @property string $collections
 * @property string $mapCenterAddress
 * @property string $mapCenterAddressCoords.lat
 * @property string $mapCenterAddressCoords.lng
 * @property string $mainColor
 * @property string $secondaryColor
 * @property Story[] $stories
 */
class App extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = '_newid';

    /**
     * @var array
     */
    protected $fillable = ['_id', '_oldid', 'name', 'orgId', 'description', 'image', 'collections', 'mapCenterAddress', 'mapCenterAddressCoords.lat', 'mapCenterAddressCoords.lng', 'mainColor', 'secondaryColor'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stories()
    {
        return $this->hasMany('App\Models\Story', 'app', '_newid');
    }
}
