<?php

class Product_model extends CI_Model {

    // Function to insert category data
    public function insert_category($data) {
        return $this->db->insert('category', $data); // 'category' is the table name
    }

    // """Function to get all categories."""
    public function get_categories() {
        $query=$this->db->get("category");
        return $query->result();
    }

    //  """Function to get a user by ID."""
    public function get_user_by_id($id) {
        return $this->db->where('id', $id)->get('users')->row();
    }

    public function insert_color($data) {
        return $this->db->insert('color', $data); 
    }

    public function get_colors() {
        $query=$this->db->get("color");
        return $query->result();
    }

    public function insert_size($data) {
        return $this->db->insert('size', $data); 
    }

    public function get_sizes() {
        $query=$this->db->get("size");
        return $query->result();
    }

    public function insert_brand($data) {
        return $this->db->insert('brand', $data); 
    }

    public function get_brands() {
        $query=$this->db->get("brand");
        return $query->result();
    }

    public function insert_product_name($data) {
        return $this->db->insert('product', $data); 
    }

    public function get_product_names() {
        $query=$this->db->get("product");
        return $query->result();
    }

    public function insert_item($data) {
        return $this->db->insert('evo_products', $data); 
    }

    public function get_items() {
        $query=$this->db->get("evo_products");
        return $query->result();
    }

    public function insert_variant($data) {
        return $this->db->insert('products_variants', $data); 
    }

    public function get_variants() {
        $query=$this->db->get("products_variants");
        return $query->result();
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

