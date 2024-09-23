<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Site;
use App\Models\Client;


class Contact extends Model
{
    use HasFactory;

     /**
      * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
          'client_id',
          'site_id',
          'nom',
          'prenom',
          'email',
          'mobile',
          'fixe',
     ];

     public function clients ()
     {
          return $this->belongsTo(Client::class, 'client_id');
     }
     public function sites()
     {
          return $this->belongsTo(Site::class, 'site_id');
     }
}
