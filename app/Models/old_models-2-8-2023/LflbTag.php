<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $story
 * @property string $_oldid
 * @property string $storyid
 * @property string $value
 * @property LflbStory $lflbStory
 */
class LflbTag extends Model
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
    protected $fillable = ['story', '_oldid', 'storyid', 'value'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lflbStory()
    {
        return $this->belongsTo('App\Models\LflbStory', 'story');
    }
}
