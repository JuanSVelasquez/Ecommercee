<?php 


namespace classesPHP;
use Rain\Tpl;

class PageAdmin extends Page{
    public function __construct($opts = array(), $tpl_dir="/visualizacao/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }    
}


?>