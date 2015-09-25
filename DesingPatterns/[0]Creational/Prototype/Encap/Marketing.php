<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/23/2015
 * Time: 7:09 PM
 * IAcmePrototype[
protected $name;
protected $id;
protected $employeePic;
protected $dept;]
 */

namespace acme;

include_once 'IAcmePrototype.php';
class Marketing extends IAcmePrototype
{
    const UNIT='Marketing';
    private $sales='[Sales]';
    private $promotion='[Promotion]';
    private $strategic='[Strategic Planning]';

    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 101;
                $this->dept=$this->sales;
                break;
            case 102;
                $this->dept=$this->promotion;
                break;
            case 103;
                $this->dept=$this->strategic;
                break;
            default:
                $this->dept='Unrecognized Marketing';
                break;
        }
    }


    public function __clone(){}
    public function getDept(){return $this->dept;}


}