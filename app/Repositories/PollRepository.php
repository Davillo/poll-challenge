<?php

namespace App\Repositories;

use App\Models\Poll;
use App\Models\PollOption;

class PollRepository extends BaseRepository{

    function __construct(Poll $poll = null)
    {
        parent::__construct($poll ?? new Poll());
    }

    function getAndupdateViews(int $id){
        $poll = $this->getById($id);
        $poll->total_views += 1;
        $poll->update();
        return $poll;
    }

    function store(array $data){
        $poll = $this->create($data);
        $options = $data['options'];

        foreach($options as $option){
            PollOption::create([
                'poll_id' => $poll->id,
                'description' => $option
            ]);
        }
        return $poll->id;
    }

    function vote(int  $pollId, int $optionId){
        $pollOption = PollOption::where('poll_id', $pollId)->where('id', $optionId)->first();
        $pollOption->total_votes += 1;
        $pollOption->update();
        return $pollOption;
    }
}
