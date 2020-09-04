<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollOption extends Model
{
    protected $table = 'poll_options';

    function poll(){
        return $this->belongsTo(Poll::class);
    }
}
