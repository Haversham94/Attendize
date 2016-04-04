<?php

namespace App\Models;

class QuestionAnswer extends MyBaseModel
{

    protected $fillable = [
        'question_id',
        'event_id',
        'attendee_id',
        'account_id',
        'answer_text',
        'questionable_id',
        'questionable_type',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function event()
    {
        return $this->belongsToMany('\App\Models\Event');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function question()
    {
        return $this->belongsTo('\App\Models\Question');
    }

}
