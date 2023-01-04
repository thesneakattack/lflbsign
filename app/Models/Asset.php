<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $_newid
 * @property string $_id
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
 * @property StoryAsset[] $storyAssets
 */
class Asset extends Model
{

    // protected $table = 'assets_copy';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = '_newid';

    /**
     * @var array
     */
    protected $fillable = ['_id', '_oldid', 'orgId', 'link', 'originalImage', 'type', 'text', 'cleanText', 'name', 'caption', 'tags', 'thumbnail'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function storyAssets()
    {
        return $this->hasMany('App\Models\StoryAsset', 'asset', '_newid');
    }
}
