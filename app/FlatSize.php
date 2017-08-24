<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlatSize extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
        'project_id', 'size', 'price'
    ];

    /**
     * FlatSize belongs to Project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        // belongsTo(RelatedModel, foreignKey = project_id, keyOnRelatedModel = id)
        return $this->belongsTo(Project::class);
    }
}
