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
    private $sales='sales';
    private $promotion='promotion';
    private $strategic='strategic planning';

    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 101;
                $this->dept=$this->sales;
            case 102;
                $this->dept=$this->promotion;
            case 103;
                $this->dept=$this->strategic;
            default:
                $this->dept='Unrecognized Marketing';
        }
    }


    public function __clone(){}


}