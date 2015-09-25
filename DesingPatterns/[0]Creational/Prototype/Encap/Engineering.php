<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/23/2015
 * Time: 7:32 PM
 */

namespace acme;

include_once 'IAcmePrototype.php';
class Engineering extends IAcmePrototype
{
    const UNIT='Engineering';
    private $development='[Programming]';
    private $desing='[Digital Artwork]';
    private $sysAd='[System Administration]';
    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 301;
                $this->dept=$this->development;
                break;
            case 302;
                $this->dept=$this->desing;
                break;
            case 303;
                $this->dept=$this->sysAd;
                break;
            default;
                $this->dept='Unreconized Engineering';
                break;
        }
    }
    public function __clone(){}
    public function getDept(){return $this->dept;}

}