<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $_newid
 * @property integer $story
 * @property integer $asset
 * @property string $_id
 * @property string $_oldid
 * @property string $caption
 * @property boolean $position
 * @property string $annotations
 * @property Story $story
 * @property Asset $asset
 */
class StoryAsset extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'storyAssets';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = '_newid';

    /**
     * @var array
     */
    protected $fillable = ['story', 'asset', '_id', '_oldid', 'caption', 'position', 'annotations'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function story()
    {
        return $this->belongsTo('App\Models\Story', 'story', '_newid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function asset()
    {
        return $this->belongsTo('App\Models\Asset', 'asset', '_newid');
    }

    public function scopePositionAscending($query)
    {
        return $query->orderBy('position', 'ASC');
    }
}
