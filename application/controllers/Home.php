<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {        

        public function index()
                {

                 $this->load->view('home');
        }
        public function activity()

        {
                echo "The activity is working";
               
        }

       
}
