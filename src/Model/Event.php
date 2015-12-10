
<?php

class Event extends Model
{
    protected $table = 'event';

    protected $fillable = [
        'eventID',
        'evenTitle',
        'eventDescription',
        'eventColorCode',
        'dateCreated',
        'eventType',
        'eventPrivacy',
        'createdBy',
        'personInCharge',
        'eventStartDay',
        'eventStartTime',
        'eventEndDay',
        'eventEndTime',
        'allDay'
    ];
?>