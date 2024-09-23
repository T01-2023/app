<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Site;
use App\Models\Contact;


class Client extends Model
{
     use HasFactory;

     /**
      * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
          'raisonsociale',
          'siret',
          'adresse',
          'codepostal',
          'ville',
          'web',
     ];

     public function sites()
     {
          return $this->hasMany(Site::class);
     }
     public function contacts()
     {
          return $this->hasMany(Contact::class);
     }
}
