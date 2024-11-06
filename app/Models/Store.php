<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
  protected $fillable = [
    'outlet_sap_id',
    'name',
    'department_id',
    'store_type',
    'operational_date',
    'address',
    'latitude',
    'longitude',
    'phone'
  ];
  public function department()
  {
    return $this->belongsTo(Department::class);
  }
}
