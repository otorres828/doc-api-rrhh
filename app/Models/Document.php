<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Document extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded =['id','create_at','updated_at'];

    public function toSearchableArray()
    {
        $array = $this->toArray();
 
       return[
            'name'=>$this->name,
            'body'=>$this->body,
       ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    } 

    //relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
