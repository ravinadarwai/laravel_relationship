<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;
    protected $fillable=['user_id','phone_no','address'];


    public function user(){
        return $this->belongsTo(user::class);
    }
}
