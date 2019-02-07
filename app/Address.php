<?php

namespace App;

class Address
{
    private $siDo;
    private $siGunGu;
    private $jibunAddress;
    private $roadAddress;
    private $detailAddress;

    public function __construct(
        string $siDo = null,
        string $siGunGu = null,
        JibunAddress $jibunAddress = null,
        RoadAddress $roadAddress = null,
        string $detailAddress = null
    ) {
        $this->siDo = $siDo;
        $this->siGunGu = $siGunGu;
        $this->jibunAddress = $jibunAddress;
        $this->roadAddress = $roadAddress;
        $this->detailAddress = $detailAddress;
    }

    public function getSiDo()
    {
        return $this->siDo;
    }

    public function getSiGunGu()
    {
        return $this->siGunGu;
    }

    public function getJibunAddress()
    {
        return $this->jibunAddress;
    }

    public function getRoadAddress()
    {
        return $this->roadAddress;
    }

    public function getDetailAddress()
    {
        return $this->detailAddress;
    }

    public function isEqualTo(Address $other)
    {
        return $this->siDo === $other->getSiDo()
            && $this->siGunGu === $other->getSiGunGu()
            && $this->jibunAddress->isEqualTo($other->getJibunAddress())
            && $this->roadAddress->isEqualTo($other->getRoadAddress());
    }

    public function toArray()
    {
        return [
            'siDo' => $this->siDo,
            'siGuGu' => $this->siGunGu,
            'jibunAddress' => $this->jibunAddress->toArray(),
            'roadAddress' => $this->roadAddress->toArray(),
            'detailAddress' => $this->detailAddress,
        ];
    }
}
