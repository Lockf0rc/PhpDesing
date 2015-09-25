<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/23/2015
 * Time: 7:24 PM
 *  IAcmePrototype[
protected $name;
protected $id;
protected $employeePic;
protected $dept;]
 */

namespace acme;

include_once 'IAcmePrototype.php';
class Management extends IAcmePrototype
{
    const UNIT='Management';
    private $research='research';
    private $plan='planning';
    private $operations='operations';
    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 201;
                $this->dept=$this->research;
            case 202;
                $this->dept=$this->plan;
            case 203;
                $this->dept=$this->operations;
            default;
                $this->dept="Unrecognized Management";
        }
    }


    public function __clone(){}


}