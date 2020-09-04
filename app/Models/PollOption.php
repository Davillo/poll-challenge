<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollOption extends Model
{
    protected $table = 'poll_options';

    protected $fillable = [
        'description',
        'poll_id'
    ];

    function poll(){
        return $this->belongsTo(Poll::class);
    }
}
