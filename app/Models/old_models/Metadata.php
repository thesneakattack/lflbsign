<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $_newid
 * @property string $_id
 * @property string $_oldid
 * @property string $contributor
 * @property string $creator
 * @property string $description
 * @property string $format
 * @property string $identifier
 * @property string $language
 * @property string $publisher
 * @property string $relation
 * @property string $rights
 * @property string $source
 * @property string $subject
 * @property string $type
 */
class Metadata extends Model
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
    protected $fillable = ['_id', '_oldid', 'contributor', 'creator', 'description', 'format', 'identifier', 'language', 'publisher', 'relation', 'rights', 'source', 'subject', 'type'];
}
