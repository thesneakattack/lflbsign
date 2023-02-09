<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $_oldid
 * @property integer $parentCollection
 * @property string $title
 * @property string $stories
 * @property string $stories_new
 * @property string $subTitle
 * @property string $mainImage
 * @property boolean $position
 * @property LflbCollection $lflbCollection
 */
class LflbSubCollection extends Model
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
    protected $fillable = ['_oldid', 'parentCollection', 'title', 'stories', 'stories_new', 'subTitle', 'mainImage', 'position'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lflbCollection()
    {
        return $this->belongsTo('App\Models\LflbCollection', 'parentCollection');
    }

    // Custom code David F.
    public function storyIds()
    {
        return explode(',', $this->stories_new);
    }    
}
