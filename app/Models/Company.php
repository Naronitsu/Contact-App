<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    //enable mass assignment
    protected $fillable = ['name', 'address', 'website', 'email'];

    //define a one-to-many relationship with contacts table
    public function contacts(){
        return $this->hasMany(Contact::class);
    }

}