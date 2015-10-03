<?php
/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 9/19/2015
 * Time: 2:32 PM
 */

namespace bootstrap;

include_once 'panel.php';
include_once 'alert.php';
include_once 'jumbotron.php';
include_once 'modal.php';
include_once 'breadcrumbs.php';
include_once 'pagination.php';
include_once 'thumbnails.php';
#helper
include_once 'Image.php';
include_once 'Button.php';
?>

<?php
#breadcrumbs
class Client{
    public function __construct()
    {
        $bread=new breadcrumbs();
        $bread->_dir("TESTING");
        $bread->_list("HOME","http://www.scriptreference.com/Home/");
        $bread->_list("WEBLINKS","http://www.scriptreference.com/Document/");
        
#panel
        $div=new panel();
        $div->_class("panel-danger");
        $div->_content
        ("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac convallis est, vitae varius dolor. Nulla sollicitudin felis a magna tempus feugiat. Etiam rhoncus elit a blandit dignissim. Praesent mattis, odio vitae porttitor blandit, sem magna commodo diam, a ornare eros orci vel massa. Suspendisse hendrerit arcu non nisl dapibus finibus. Suspendisse nec tellus leo. Donec ullamcorper, leo a dictum mollis, nisi mi faucibus magna, at tempus metus augue porttitor arcu. Maecenas vulputate interdum elementum. Phasellus eu nulla nec augue molestie tincidunt ac eu ligula. Suspendisse elementum, nisi sit amet tincidunt blandit, quam velit tempus arcu, eu molestie ligula libero nec enim.
        ");
        $div2=clone $div;
        $div2->_heading("clone of div one");
        $div2->_class("panel-primary");

        $div3=clone $div;
        $div3->_class("panel-warning");

        $div4=clone $div;
        $div4->_class("panel-success");
#alert
        $al=new alert("alert-success","
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac convallis est, vitae varius dolor. Nulla sollicitudin felis a magna tempus feugiat. Etiam rhoncus elit a blandit dignissim. Praesent mattis, odio vitae porttitor blandit, sem magna commodo diam, a ornare eros orci vel massa. Suspendisse hendrerit arcu non nisl dapibus finibus. Suspendisse nec tellus leo. Donec ullamcorper, leo a dictum mollis, nisi mi faucibus magna, at tempus metus augue porttitor arcu. Maecenas vulputate interdum elementum. Phasellus eu nulla nec augue molestie tincidunt ac eu ligula. Suspendisse elementum, nisi sit amet tincidunt blandit, quam velit tempus arcu, eu molestie ligula libero nec enim.

        ");
        $a2=clone $al;
        $a2->_class("alert-warning");
        $a3= clone $al;
        $a3->_class("alert-info");
        $a4=clone $al;
        $a4->_class("alert-danger");
#jumbotron
        $jmFormat='<h1 title="TEST">AHOY THERE!</h1>';
        $jm=new jumbotron("
        Nam pretium lorem eu erat dignissim pharetra. Proin molestie nibh sit amet nunc rhoncus hendrerit. Morbi rhoncus hendrerit purus sed imperdiet. Proin odio eros, mattis sed metus vitae, bibendum tristique felis. Vivamus ultrices sapien ut eros varius, ut iaculis mi porttitor. Donec egestas vel augue at interdum. Duis finibus efficitur velit ac consectetur. Quisque ultricies sem a metus posuere imperdiet. In mauris tortor, ornare at sollicitudin sit amet, fringilla quis nibh. Vivamus massa elit, hendrerit non dui quis, luctus egestas metus. Aenean suscipit aliquet lorem. Ut vel scelerisque libero. Cras id nisi quis lorem pulvinar imperdiet in pharetra ipsum");
        $jmbtn= new Button('#','btn-success','Learn More');

        $jm->_content($jm->content.'<br>'.$jmbtn);
        $jmFormat.=$jm;
        $jm=$jmFormat;
#modal
        $modal=new modal();

        $modal2=new modal("mos","learn more","PHP DESING PATTERN",'
    Nam pretium lorem eu erat dignissim pharetra. Proin molestie nibh sit amet nunc rhoncus hendrerit. Morbi rhoncus hendrerit purus sed imperdiet. Proin odio eros, mattis sed metus vitae, bibendum tristique felis. Vivamus ultrices sapien ut eros varius, ut iaculis mi porttitor. Donec egestas vel augue at interdum. Duis finibus efficitur velit ac consectetur. Quisque ultricies sem a metus posuere imperdiet. In mauris tortor, ornare at sollicitudin sit amet, fringilla quis nibh. Vivamus massa elit, hendrerit non dui quis, luctus egestas metus. Aenean suscipit aliquet lorem. Ut vel scelerisque libero. Cras id nisi quis lorem pulvinar imperdiet in pharetra ipsum
    ');
#formating strings
        $blk='<div class="col-md-4">';
        $_blk='</div>';
        $fullcolum='';#'<div class="col-md-12">';
        $_fullcolum=$_blk;
#pagination

        $pager=new pagination();
        $pager->_list(20,39);

#thumnail

 #+image
        $th['image']=new Image("http://placehold.it/350x150");

 #+button
        $th['button']=new Button("http://scriptreference.com",'btn-default','HOME=)');
        $thumnail=new thumbnails($th['image'],"NEW ITEM",$th['button']);
        $thumnail2=clone $thumnail;
        $thumnail2->_image(new Image("http://placehold.it/200x200"));


   return  $modal.$bread.$jm.$thumnail.$thumnail2.
     $fullcolum.$blk.$div.$al.$_blk.
     $blk.$div2.$a2.$_blk.
     $blk.$div3.$a3.$_blk.
     $blk.$div4.$a4.$_blk.$pager.
     $_fullcolum.$modal.$modal2;

    }
}
?>


