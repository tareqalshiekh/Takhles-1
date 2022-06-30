<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
  use HasFactory;
  protected $table = "shipments";
  protected $fillable = ['note'];

  public function shipment_image()
  {
    return $this->hasMany(shipment_image::class, 'shipment_id');
  }
}
