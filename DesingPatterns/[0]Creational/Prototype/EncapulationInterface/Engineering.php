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
    private $development='programming';
    private $desing='digital artwork';
    private $sysAd='system administration';
    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 301;
                $this->dept=$this->development;
            case 302;
                $this->dept=$this->desing;
            case 303;
                $this->dept=$this->sysAd;
            default;
                $this->dept='Unreconized Engineering';
        }
    }
    public function __clone(){}

}