<?php

namespace App\Traits\Eloquent;

use Carbon\Carbon;

trait DateIntervalTrait
{
    /**
     * Mutator for starting_date attribute.
     *
     * @return void
     */
    public function setStartingDateAttribute($value)
    {
        $this->attributes['starting_date'] = Carbon::parse($value);
    }

    /**
     * Mutator for ending_date attribute.
     *
     * @return void
     */
    public function setEndingDateAttribute($value)
    {
        $this->attributes['Ending_date'] = Carbon::parse($value);
    }
}
