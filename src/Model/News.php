
<?php

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
    	'newsID',
        'newsTitle',
        'newsAuthor',
        'newsContent',
        'newsDateCreated',
        'newsDatePublished',
        'newsStatus'
    ];
?>