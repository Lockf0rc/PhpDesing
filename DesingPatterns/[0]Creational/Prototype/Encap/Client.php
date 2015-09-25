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
        #create IAcmePrototype classes
        $this->makeConProto();
        #clone marketing class
        $Tess= clone $this->market;
        #assing marketing class with profile information
        $this->setEmployee($Tess,'Tess Smith',101,"ts101-1234",'tess.jpg');
        #display
        $this->showEmployee($Tess);

        #clone marketing
        $Jacob= clone $this->market;
        #assing marketing class with profile information
        $this->setEmployee($Jacob,'Jacob Jones',102,'jj101-2234',"jacob.jpg");
        #displat
        $this->showEmployee($Jacob);

        #clone Manager
        $Ricky=clone $this->manage;
        $this->setEmployee($Ricky,'Ricky Roriguez',203,"rr203-5634",'ricky.jpg');
        $this->showEmployee($Ricky);

        $Olivia=clone $this->engineer;
        $this->setEmployee($Olivia,'Olivia Perez',302,"op301-1278",'olivia.jpg');
        $this->showEmployee($Olivia);





    }
    private function makeConProto()
    {
        $this->market=new Marketing();
        $this->manage=new Management();
        $this->engineer=new Engineering();
    }
    private  function showEmployee(IAcmePrototype $employeeNow)
    {

        $px = $employeeNow->getPic();
        $fm = '<img src="%s" width="150px" height="150px"></br>
    %s<br>
    %s : %s<br>
    ID:%s</p>';
        echo sprintf($fm,$px,$employeeNow->getName(),$employeeNow->getDept(),$employeeNow::UNIT,$employeeNow->getId());
    }
    private  function setEmployee(IAcmePrototype $employeeNow,$nm,$dp,$id,$px)
    {
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setId($id);
        $employeeNow->setPic($px);
    }

}

  $worker= new Client();

?>