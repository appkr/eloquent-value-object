<?php

namespace App;

class AddressFactory
{
    public static function createFromJson(string $json)
    {
        $u = json_decode($json);

        $j = $u->jibunAddress ?? null;
        $jibunAddress = new JibunAddress(
            $j->adminDongName ?? null,
            $j->legalDongName ?? null,
            $j->legalRiName ?? null,
            $j->isMountain ?? null,
            $j->jibunNumber ?? null
        );

        $r = $u->roadAddress ?? null;
        $roadAddress = new RoadAddress(
            $r->roadName ?? null,
            $r->isBasement ?? null,
            $r->buildingNumber ?? null
        );

        return new Address(
            $u->siDo ?? null,
            $u->siGunGu ?? null,
            $jibunAddress,
            $roadAddress,
            $u->detailAddress ?? null
        );
    }
}
