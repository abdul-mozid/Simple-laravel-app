<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Par extends Model
{
    public function parents_of_a(){
        return $this->belongsTo(Student::class,'parent_of','id');
    }
    protected $table="parents";
    protected $fillable=['name','phone','email','parent_of'];
}
