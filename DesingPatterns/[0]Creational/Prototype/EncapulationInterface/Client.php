<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/23/2015
 * Time: 7:40 PM
 */

namespace acme;
include_once 'Management.php';
include_once 'Engineering.php';
include_once 'Marketing.php';

class Client
{
    private $market;
    private $manage;
    private $engineer;
    public function __construct()
    {

    }
    private function makeConProto()
    {
        $this->market=new Marketing();
        $this->manage=new Management();
        $this->engineer=new Engineering();
    }
    private  function showEmployee(IAcmePrototype $employeeNow)
    {
        $px=$employeeNow->getPic();
        $fm='<img src="%s" width="150px" height="150px"></br>
%s<br>
%s : %s<br>
%s</p>
';
        echo sprintf($fm,$px,$employeeNow->getName(),$employeeNow->getDept(),$employeeNow::UNIT,$employeeNow->getId());
}

}