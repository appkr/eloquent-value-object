<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CustomerAddress
 *
 * @property int $id
 * @property int $customer_id
 * @property string $addr_si_do_name 시도
 * @property string|null $addr_si_gun_gu_name 시군구
 * @property string|null $addr_admin_dong_name 행정동
 * @property string|null $addr_legal_dong_name 법정동
 * @property string|null $addr_legal_ri_name 법정리
 * @property int $addr_is_mountain 산 여부 (0:대지, 1:산)
 * @property string|null $addr_jibun_number 지번
 * @property string|null $addr_road_name 도로명
 * @property int $addr_is_basement 지하 여부 (0:지상, 1:지하, 2:공중)
 * @property string|null $addr_building_number 건물번호
 * @property string|null $addr_detail 상세주소 (건물명 등)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Customer $customer
 * @mixin \Eloquent
 */
class CustomerAddress extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
