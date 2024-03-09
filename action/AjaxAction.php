<?php
    require_once("action/CommonAction.php");
    class AjaxAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            
            //retourne deja en json encoded
            //concat pour avoir http://ip-api.com/json/XXXXXX(addressip)
            $result = file_get_contents("http://ip-api.com/json/".$_POST["ipAdress"]);

            return compact("result");
        }
    }