<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $_newid
 * @property string $_id
 * @property string $_oldid
 * @property integer $parentCollection
 * @property string $title
 * @property string $stories
 * @property string $subTitle
 * @property string $mainImage
 * @property Collection $collection
 */
class SubCollection extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'subCollections';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = '_newid';

    /**
     * @var array
     */
    protected $fillable = ['_id', '_oldid', 'parentCollection', 'title', 'stories', 'subTitle', 'mainImage'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function collection()
    {
        return $this->belongsTo('App\Models\Collection', 'parentCollection', '_newid');
    }

    public function storyIds()
    {
        return explode(',', $this->stories);
    }
}
