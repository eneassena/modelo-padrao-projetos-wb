<?php 


namespace Web\App\Controller;

class HomeController extends Controller {
    public function __construct() { parent::__construct(); }

    public function home () { echo $this->view->render("site/home", $this->data); }
}