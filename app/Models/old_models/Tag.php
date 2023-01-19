<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $_newid
 * @property integer $story
 * @property string $_id
 * @property string $_oldid
 * @property string $storyid
 * @property string $value
 * @property Story $story
 */
class Tag extends Model
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
    protected $fillable = ['story', '_id', '_oldid', 'storyid', 'value'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function story()
    {
        return $this->belongsTo('App\Models\Story', 'story', '_newid');
    }
}
