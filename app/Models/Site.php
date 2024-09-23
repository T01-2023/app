<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Site extends Model
{
     use HasFactory;

     /**
      * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
          'client_id',
          'nom',
          'adresse',
          'codepostal',
          'ville',
     ];

     public function clients ()
     {
          return $this->belongsTo(Client::class, 'client_id');
     }
     public function contacts()
     {
          return $this->hasMany(Contact::class);
     }
}
