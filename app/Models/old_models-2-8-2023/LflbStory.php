<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $app
 * @property string $_oldid
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $imageUrl
 * @property string $collections
 * @property string $collections_new
 * @property string $startDay
 * @property string $startMonth
 * @property string $startYear
 * @property string $endDay
 * @property string $endMonth
 * @property string $endYear
 * @property string $locationName
 * @property string $location_lat
 * @property string $location_lng
 * @property string $metaData
 * @property LflbApp $lflbApp
 * @property LflbStoryAsset[] $lflbStoryAssets
 * @property LflbTag[] $lflbTags
 */
class LflbStory extends Model
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
    protected $fillable = ['app', '_oldid', 'title', 'description', 'image', 'imageUrl', 'collections', 'collections_new', 'startDay', 'startMonth', 'startYear', 'endDay', 'endMonth', 'endYear', 'locationName', 'location_lat', 'location_lng', 'metaData'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lflbApp()
    {
        return $this->belongsTo('App\Models\LflbApp', 'app');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lflbStoryAssets()
    {
        return $this->hasMany('App\Models\LflbStoryAsset', 'story');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lflbTags()
    {
        return $this->hasMany('App\Models\LflbTag', 'story');
    }
}
