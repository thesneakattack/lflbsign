<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $_newid
 * @property string $_id
 * @property string $_oldid
 * @property string $title
 * @property string $description
 * @property string $coverPhoto
 * @property string $subCollections
 * @property string $featured
 * @property string $introText
 * @property string $bodyText
 * @property string $mainImage
 * @property SubCollection[] $subCollections
 */
class Collection extends Model
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
    protected $fillable = ['_id', '_oldid', 'title', 'description', 'coverPhoto', 'subCollections', 'featured', 'introText', 'bodyText', 'mainImage'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subCollections()
    {
        return $this->hasMany('App\Models\SubCollection', 'parentCollection', '_newid');
    }
}
