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
        return $this->db->insert('product_variants', $data); 
    }

    public function get_variants() {
        $query=$this->db->get("product_variants");
        return $query->result();
    }

// joining sql, evo products table with brand, category & product name
public function get_item_details() {
    $sql = "
        SELECT 
            evo_products.barcode,
            product.product_name,
            category.category_name,
            brand.brand_name,
            evo_products.cost,
            evo_products.price
        FROM 
            evo_products
        LEFT JOIN 
            product ON product.id = evo_products.product_id
        LEFT JOIN 
            brand ON brand.id = evo_products.brand_id
        LEFT JOIN 
            category ON category.id = evo_products.category_id
    ";
    $query = $this->db->query($sql); // Execute the raw SQL query
    return $query->result(); // Return results as an array of objects
}

// query product details by barcode
public function get_details_by_barcode($barcode) {
    $sql = "
    SELECT  
        product.product_name,
        category.category_name,
        brand.brand_name
    FROM
        evo_products
    LEFT JOIN
        product ON product.id = evo_products.product_id
    LEFT JOIN
        brand ON brand.id = evo_products.brand_id
    LEFT JOIN
        category ON category.id = evo_products.category_id
    LEFT JOIN
        size ON size.id = evo_products.category_id
    WHERE 
         evo_products.barcode = ?
    LIMIT 1
    ";
    $query = $this->db->query($sql, [$barcode]);
    return $query->row(); // return single object
}


public function get_variants_with_details() {
    $this->db->select('
        evo_products.barcode,
        product.product_name
    ');
    $this->db->from('evo_products');
    $this->db->join('product', 'product.id = evo_product.product_id', 'left');
    $query = $this->db->get();
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

