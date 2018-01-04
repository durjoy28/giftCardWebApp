<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales_gold extends Model
{
    protected  $table="sales_gold";
    protected $fillable = [
      "email",
      "mobile",
      "address",
    ];
}
