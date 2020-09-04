<?php

namespace App\Repositories;

use App\Models\Poll;

class PollRepository extends BaseRepository{

    function __construct(Poll $poll = null)
    {
        parent::__construct($poll ?? new Poll());
    }

}
