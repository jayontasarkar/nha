<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'desc', 'location', 'status', 'starting_date', 'ending_date'
    ];


    protected $dates = [
        'starting_date', 'ending_date'
    ];

    /**
     * Project has many Flat_sizes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function flat_sizes()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = project_id, localKey = id)
        return $this->hasMany(FlatSize::class);
    }
}
