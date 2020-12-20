<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class AdminPermission extends Model
{
   protected $connection = 'mysql2';

	/*protected $fillable = ['db'];

   public function __construct(array $attributes = array())
  {

    parent::__construct($attributes);
    $s = $attributes[0]['db'];

    $this->setConnection(env('DB_DATABASE_SECOND',$s));

  }*/
}