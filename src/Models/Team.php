<?php

namespace Tyondo\Team\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(config('tteam.namespace').'User');
    }
}
