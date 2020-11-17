<?php


class Pages extends Controller {

    public function __construct()
    {
        
    }

    public function index(){
      
        $data = [
            'title' => 'Welcome', 
            'desc' => 'This is custom MVC Framework made for exercise.'
        ];
        $this->view('pages/index', $data);

    }

    
}