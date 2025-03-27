<?php
class Auth extends CI_Controller {

    public function index() {
        $this->load->view('bts_signin'); // Load the login form view
    }

    public function register() {
        // Load the view for the register page
        $data['title'] = 'Registration';
        $this->load->view('layouts/header', $data);
        $this->load->view('register');
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Load the model
        $this->load->library('form_validation'); // Load form validation library
    }

    // Function to process form data and insert into the database
    public function submit() {
        // Set form validation rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            // Reload the form with validation errors
            $data['title'] = 'Registration';
            $this->load->view('layouts/header', $data);
            $this->load->view('register');
        } else {
            // Prepare data to insert into the database
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'phone_number' => $this->input->post('phonenumber'), //phonenumber dont save
                'address' => $this->input->post('address2'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zip' => $this->input->post('zip'),
                'country' => $this->input->post('country'), //name in view register is country
            );

            // Insert data using the model
            if ($this->User_model->insert_user($data)) {
                $this->session->set_flashdata('success', 'Registration successful!');
                redirect('auth/index');
            } else {
                $this->session->set_flashdata('error', 'Failed to register. Try again.');
                $this->load->view('register');
            }
        }
    }

        // public function authenticate() {
        //     $username = $this->input->post('username');
        //     $password = $this->input->post('password');

        //     $user = $this->User_model->validate_user($username, $password);

        //     if ($user) {
        //         // Set user session data if valid
        //         $this->session->set_userdata('username', $username);
        //         redirect('dashboard'); // Redirect to a secure area after login
        //     } else {
        //         // Show an error message and reload the login page
        //         $data['error'] = 'Invalid username or password';
        //         $this->load->view('login_view', $data);
        //     }
        // }

        // public function logout() {
        //     $this->session->unset_userdata('username');
        //     $this->session->sess_destroy();
        //     redirect('login');
        // }
}
