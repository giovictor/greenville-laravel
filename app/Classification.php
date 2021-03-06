<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;
class Classification extends Model
{
    protected $table = 'classification';

    protected $primaryKey = 'classificationID';

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
