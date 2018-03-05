
<?php
    defined('BASEPATH') OR exit ('No direct script access allowed');
    class Main extends CI_Controller
    {

        //functions
        public function index()
        {
            echo 'test index function';
            $this->test();
        }

        public function test(){
            echo 'test the second function';
        }

    }