<?php

class User_model extends CI_Model {

    // Function to insert registration data
    public function insert_user($data) {
        return $this->db->insert('users', $data); // 'users' is the table name
    }

    // """Function to get all users."""
    public function get_users() {
        $query=$this->db->get("users");
        return $query->result();
    }

    //  """Function to get a user by ID."""
    public function get_user_by_id($id) {
        return $this->db->where('id', $id)->get('users')->row();
    }

    // public function update_user($id, $data) {
    //     """Function to update a user."""
    //     return $this->db->where('id', $id)->update('users', $data);
    // }

    // public function delete_user($id) {
    //     """Function to delete a user."""
    //     return $this->db->where('id', $id)->delete('users');
    // }

    // // Function to validate user credentials
    // public function validate_user($username, $password) {
    //     $this->db->where('username', $username);
    //     $this->db->where('password', md5($password)); // Consider hashing for security
    //     $query = $this->db->get('users'); // Assuming 'users' is your table name

    //     return $query->row(); // Return the user row if exists
}

