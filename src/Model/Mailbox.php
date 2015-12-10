
<?php

class Mailbox extends Model
{
    protected $table = 'mailbox';

    protected $fillable = [
    	'mailID',
        'senderID',
        'title',
        'subject',
        'content',
        'created_at',
        'recipientID',
        'recipientGroupID'
    ];
?>