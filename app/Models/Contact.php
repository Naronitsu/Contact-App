<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    //enable mass assignment
    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'address', 'company_id'];

    //define a many-to-one relationship with companies able
    public function company(){
        return $this->belongsTo(Company::class);
    }
}