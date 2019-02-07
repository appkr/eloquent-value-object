<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Customer
 *
 * @property int $id
 * @property string $name 고객 이름
 * @property Address $address 고객 주소
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
 * @mixin \Eloquent
 */
class Customer extends Model
{
    protected $hidden = [
        'addr_si_do_name',
        'addr_si_gun_gu_name',
        'addr_admin_dong_name',
        'addr_legal_dong_name',
        'addr_legal_ri_name',
        'addr_is_mountain',
        'addr_jibun_number',
        'addr_road_name',
        'addr_is_basement',
        'addr_building_number',
        'addr_detail',
    ];

    protected $appends = [
        'address',
    ];

    public function getAddressAttribute()
    {
        return new Address(
            $this->addr_si_do_name,
            $this->addr_si_gun_gu_name,
            new JibunAddress(
                $this->addr_admin_dong_name,
                $this->addr_legal_dong_name,
                $this->addr_legal_ri_name,
                $this->addr_is_mountain,
                $this->addr_jibun_number
            ),
            new RoadAddress(
                $this->addr_road_name,
                $this->addr_is_basement,
                $this->addr_building_number
            ),
            $this->addr_detail
        );
    }

    public function setAddressAttribute(Address $address)
    {
        $this->attributes['addr_si_do_name'] = $address->getSiDo();
        $this->attributes['addr_si_gun_gu_name'] = $address->getSiGunGu();
        $this->attributes['addr_detail'] = $address->getDetailAddress();

        $jibunAddress = $address->getJibunAddress();
        $this->attributes['addr_admin_dong_name'] = $jibunAddress->getAdminDongName();
        $this->attributes['addr_legal_dong_name'] = $jibunAddress->getLegalDongName();
        $this->attributes['addr_legal_ri_name'] = $jibunAddress->getLegalRiName();
        $this->attributes['addr_is_mountain'] = $jibunAddress->isMountain();
        $this->attributes['addr_jibun_number'] = $jibunAddress->getJibunNumber();

        $roadAddress = $address->getRoadAddress();
        $this->attributes['addr_road_name'] = $roadAddress->getRoadName();
        $this->attributes['addr_is_basement'] = $roadAddress->isBasement();
        $this->attributes['addr_building_number'] = $roadAddress->getBuildingNumber();
    }
}
