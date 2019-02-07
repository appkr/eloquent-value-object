<?php

namespace App;

class JibunAddress
{
    private $adminDongName;
    private $legalDongName;
    private $legalRiName;
    private $isMountain;
    private $jibunNumber;

    public function __construct(
        string $adminDongName = null,
        string $legalDongName = null,
        string $legalRiName = null,
        bool $isMountain = null,
        string $jibunNumber = null
    ) {
        $this->adminDongName = $adminDongName;
        $this->legalDongName = $legalDongName;
        $this->legalRiName = $legalRiName;
        $this->isMountain = $isMountain;
        $this->jibunNumber = $jibunNumber;
    }

    public function getAdminDongName()
    {
        return $this->adminDongName;
    }

    public function getLegalDongName()
    {
        return $this->legalDongName;
    }

    public function getLegalRiName()
    {
        return $this->legalRiName;
    }

    public function isMountain()
    {
        return $this->isMountain;
    }

    public function getJibunNumber()
    {
        return $this->jibunNumber;
    }

    public function isEqualTo(JibunAddress $other)
    {
        return $this->adminDongName === $other->getAdminDongName()
            && $this->legalDongName === $other->getLegalDongName()
            && $this->legalRiName === $other->getLegalRiName()
            && $this->isMountain === $other->isMountain()
            && $this->jibunNumber === $other->getJibunNumber();
    }

    public function toArray()
    {
        return [
            'adminDongName' => $this->adminDongName,
            'legalDongName' => $this->legalDongName,
            'legalRiName' => $this->legalRiName,
            'isMountain' => $this->isMountain,
            'jibunNumber' => $this->jibunNumber,
        ];
    }
}
