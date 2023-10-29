<?php 


class homeController extends Controller {
    public function index() {
        $data = ['first_name' => 'eneas'];
        $this->loadTemplate('home', $data);
    }
}