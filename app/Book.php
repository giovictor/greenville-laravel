<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;
use App\Classification;
use App\Publisher;

class Book extends Model
{
    protected $table = 'book';

    protected $primaryKey = 'accession_no';

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'bookauthor','accession_no','authorID');
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class, 'classificationID');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisherID');
    }

    public function getTitleAttribute()
    {
        if(strlen($this->booktitle) > 35) {
            return substr($this->booktitle,0, 35).'...';
        } else {
            return substr($this->booktitle,0, 35);
        }
    }
}
