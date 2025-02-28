<?php
class Users extends CI_Controller {

     public function __construct() {
        // call codeigniter's default constructor
        parent::__construct();

        // load the user model
        $this->load->model('User_model'); // Load the model
    }

    public function displaydata() {
        $result['data'] = $this->User_model->get_users();
        $this->load->view('view_users', $result);
    }
}
?>