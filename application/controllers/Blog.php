<?php
class Blog extends CI_Controller {

        // public function index()
        // {
        //         echo 'Hello World!';

        //         // below is example of creating an array called todo_list
        //         $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

        //         // below is example of creating an simple variable called title
        //         $data['title'] = "The prophecy"; 
        //         $data['heading'] = "You deserve someone who loves you back as intensely as you do.";
        //         $this->load->view('header');
        //         $this->load->view('blogview', $data);
        //         $this->load->view('footer');

        //         // return view as data, br khaojai sai nai gorlanee dh ah?
        //         $string = $this->load->view('blogview','return string', TRUE);
        // }

        public function comments()
        {
                echo 'Look at this!';
        }

        public function _output($output)
        {
        echo $output;
        }
}