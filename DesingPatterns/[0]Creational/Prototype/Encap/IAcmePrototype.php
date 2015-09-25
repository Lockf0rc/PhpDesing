<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/23/2015
 * Time: 6:54 PM
 */

namespace acme;


abstract class IAcmePrototype
{
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;
    //abstract methods to implement in extended classes
    abstract function setDept($orgCode);
    abstract  function getDept();
    abstract function __clone();

    //Name concreate methods
    public function setName($emName)
    {
        $this->name=$emName;
    }
    public function getName(){return $this->name;}
    //ID
    public function setId($emId)
    {
        $this->id=$emId;
    }
    public function getId()
    {
        return $this->id;
    }
    //Employee Picture
    public function setPic($emPic){
        $this->employeePic=$emPic;
    }
    public  function getPic(){return $this->employeePic;}


}