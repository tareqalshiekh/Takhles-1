<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment_image extends Model
{
  use HasFactory;

  protected $table = "shipment_images";
  protected $fillable = ['image', 'shipment_id'];

  public function Shipment()
  {
    return $this->belongsTo(Shipment::class, 'id');
  }
}
