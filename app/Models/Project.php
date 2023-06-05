<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'created_at', 'updated_at', 'user_id', 'slug'];

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug($value);
    }
}
