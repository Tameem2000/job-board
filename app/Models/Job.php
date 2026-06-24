<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   public static function alljobs(){
    return [
        ['title' => 'Software Development', 'salary' => '$1000'],
        ['title'=> 'Accounting','salary'=> '$2000']
        ];
   }
}
