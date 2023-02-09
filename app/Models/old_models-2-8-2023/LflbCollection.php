<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $_oldid
 * @property string $title
 * @property string $description
 * @property string $coverPhoto
 * @property string $subCollections
 * @property string $subCollections_new
 * @property string $featured
 * @property string $introText
 * @property string $bodyText
 * @property string $mainImage
 * @property LflbSubCollection[] $lflbSubCollections
 */
class LflbCollection extends Model
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
    protected $fillable = ['_oldid', 'title', 'description', 'coverPhoto', 'subCollections', 'subCollections_new', 'featured', 'introText', 'bodyText', 'mainImage'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lflbSubCollections()
    {
        return $this->hasMany('App\Models\LflbSubCollection', 'parentCollection');
    }
}
