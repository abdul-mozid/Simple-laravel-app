<?php

namespace App;
use App\Department;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function departmentss(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
    protected $table="students";
    protected $fillable=['name','phone','email','roll_no','reg_no','department_id'];
}
