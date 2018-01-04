<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales_platinum extends Model
{
    protected  $table="sales_platinum";
    protected $fillable = [
      "email",
      "mobile",
      "address",
    ];
}
