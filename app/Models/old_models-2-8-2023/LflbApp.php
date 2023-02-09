<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $_oldid
 * @property string $name
 * @property string $orgId
 * @property string $description
 * @property string $image
 * @property string $collections
 * @property string $collections_new
 * @property string $mapCenterAddress
 * @property string $mapCenterAddressCoords_lat
 * @property string $mapCenterAddressCoords_lng
 * @property string $mainColor
 * @property string $secondaryColor
 * @property LflbStory[] $lflbStories
 */
class LflbApp extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['_oldid', 'name', 'orgId', 'description', 'image', 'collections', 'collections_new', 'mapCenterAddress', 'mapCenterAddressCoords_lat', 'mapCenterAddressCoords_lng', 'mainColor', 'secondaryColor'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lflbStories()
    {
        return $this->hasMany('App\Models\LflbStory', 'app');
    }
}
