<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Customer
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\CustomerAddress $address
 * @mixin \Eloquent
 */
class Customer extends Model
{
    public function address()
    {
        return $this->hasOne(CustomerAddress::class, 'customer_id', 'id');
    }
}
