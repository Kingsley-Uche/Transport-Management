<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
   protected $table="price"; 
   protected $primaryKey="price_id";//
   public $timestamp=false;
  // public $cost='cost';
}
