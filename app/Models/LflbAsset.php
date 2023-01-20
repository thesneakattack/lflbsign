<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $_oldid
 * @property string $orgId
 * @property string $link
 * @property string $originalImage
 * @property string $type
 * @property string $text
 * @property string $cleanText
 * @property string $name
 * @property string $caption
 * @property string $tags
 * @property string $thumbnail
 * @property LflbStoryAsset[] $lflbStoryAssets
 */
class LflbAsset extends Model
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
    protected $fillable = ['_oldid', 'orgId', 'link', 'originalImage', 'type', 'text', 'cleanText', 'name', 'caption', 'tags', 'thumbnail'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lflbStoryAssets()
    {
        return $this->hasMany('App\Models\LflbStoryAsset', 'asset');
    }
}
