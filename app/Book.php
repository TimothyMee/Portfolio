<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    protected $fillable = [
        'title', 'volume', 'author', 'year', 'genre'
    ];

    public function author()
    {
        return $this->belongsTo('App/User', 'author');
    }
    public function getBook($author)
    {
        return $this->where("author", $author)->get();
    }

    public function getBookWithGenre($genre)
    {
       return  $this->where("genre", $genre)->get();
    }

    public function deleteBook($id, $user_id)
    {
        $this->where("id", $id)
                ->update(["deleted_at" => date("Y/m/d"), "deleted_by" => $user_id]);
    }
}
