<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $story
 * @property integer $asset
 * @property string $_oldid
 * @property string $caption
 * @property boolean $position
 * @property string $annotations
 * @property LflbStory $lflbStory
 * @property LflbAsset $lflbAsset
 */
class LflbStoryAsset extends Model
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
    protected $fillable = ['story', 'asset', '_oldid', 'caption', 'position', 'annotations'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lflbStory()
    {
        return $this->belongsTo('App\Models\LflbStory', 'story');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lflbAsset()
    {
        return $this->belongsTo('App\Models\LflbAsset', 'asset');
    }

    // Custom code David F.
    public function scopePositionAscending($query)
    {
        return $query->orderBy('position', 'ASC');
    }      
}
