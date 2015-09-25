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
    private $research='[Research]';
    private $plan='[Planning]';
    private $operations='[Operations]';
    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 201;
                $this->dept=$this->research;
                break;
            case 202;
                $this->dept=$this->plan;
                break;
            case 203;
                $this->dept=$this->operations;
                break;
            default;
                $this->dept="Unrecognized Management";
                break;
        }
    }


    public function __clone(){}
    public function getDept(){return $this->dept;}


}