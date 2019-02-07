<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Customer
 *
 * @property int $id
 * @property string $name 고객 이름
 * @property Address $address 고객 주소
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @mixin \Eloquent
 */
class Customer extends Model
{
    public function getAddressAttribute(string $address)
    {
        return AddressFactory::createFromJson($address);
    }

    public function setAddressAttribute(Address $address)
    {
        $this->attributes['address'] = json_encode($address->toArray());
    }
}
