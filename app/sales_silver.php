<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales_silver extends Model
{
    protected  $table="sales_silver";
    protected $fillable = [
      "email",
      "mobile",
      "address",
    ];
}
