<?php
class Products extends CI_Controller {

    public function index() {
        $this->load->view('product'); // Load the product form view
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model'); // Load the model
        $this->load->library('form_validation'); // Load form validation library
    }

    public function category() {
        // Load the view for the register page
        $data['title'] = 'Category';
        $this->load->view('layouts/header', $data);
        $this->load->view('products/add_category');
    }

    // Function to process form data and insert into the database
    public function category_submit() {
        // Set form validation rules
        $this->form_validation->set_rules('cat_name', 'Category Name', 'required');
        $this->form_validation->set_rules('cat_id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Reload the form with validation errors
            $data['title'] = 'Registration';
            $this->load->view('layouts/header', $data);
            $this->load->view('products/add_category'); // this needs to go to view, not controller url
        } else {
            // Prepare data to insert into the database
            $data = array(
                'id' => $this->input->post('cat_id'),
                'category_name' => $this->input->post('cat_name'),
            );

            // Insert data using the model
            if ($this->Product_model->insert_category($data)) {
                $this->session->set_flashdata('success', 'Registration successful!');
                redirect('products/displaycategory');
            } else {
                $this->session->set_flashdata('error', 'Failed to add. Try again.');
                $this->load->view('products/add_category');
            }
        }
    }

    public function displaycategory() {
        $result['data'] = $this->Product_model->get_categories();
        $this->load->view('products/view_categories', $result);
    }

    public function size() {
        // Load the view for the add page
        $data['title'] = 'Size';
        $data['header'] = 'New Size';
        $this->load->view('layouts/header', $data);
        $this->load->view('products/add_size');
    }

    public function size_submit() {
        // Set form validation rules
        $this->form_validation->set_rules('size_name', 'Size Name', 'required');
        $this->form_validation->set_rules('size_id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Reload the form with validation errors
            $data['title'] = 'Add New';
            $result['header'] = 'New Size';
            $this->load->view('layouts/header', $data);
            $this->load->view('products/add_size', $result);
        } else {
            // Prepare data to insert into the database
            $data = array(
                'id' => $this->input->post('size_id'),
                'size_name' => $this->input->post('size_name'),
            );

            // Insert data using the model
            if ($this->Product_model->insert_size($data)) {
                $this->session->set_flashdata('success', 'Registration successful!');
                redirect('products/displaysize');
            } else {
                $this->session->set_flashdata('error', 'Failed to add. Try again.');
                $this->load->view('products/add_color');
            }
        }
    }

    public function displaysize() {
        $result['title'] = 'Size';
        $result['table'] = 'All Sizes Data';
        $result['add'] = 'Add New Size';
        $result['data'] = $this->Product_model->get_sizes();
        $this->load->view('products/view_sizes', $result);
    }

    public function color() {
        // Load the view for the register page
        $data['title'] = 'Color';
        $this->load->view('layouts/header', $data);
        $this->load->view('products/add_color');
    }

    // Function to process form data and insert into the database
    public function color_submit() {
        // Set form validation rules
        $this->form_validation->set_rules('color_name', 'Color Name', 'required');
        $this->form_validation->set_rules('color_id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Reload the form with validation errors
            $data['title'] = 'Add New';
            $this->load->view('layouts/header', $data);
            $this->load->view('add_color');
        } else {
            // Prepare data to insert into the database
            $data = array(
                'id' => $this->input->post('color_id'),
                'color_name' => $this->input->post('color_name'),
                'color_code' => $this->input->post('color_code'),
            );

            // Insert data using the model
            if ($this->Product_model->insert_color($data)) {
                $this->session->set_flashdata('success', 'Registration successful!');
                redirect('products/displaycolor');
            } else {
                $this->session->set_flashdata('error', 'Failed to add. Try again.');
                $this->load->view('products/add_color');
            }
        }
    }

    public function displaycolor() {
        $result['header'] = "Colors";
        $result['data'] = $this->Product_model->get_colors();
        $this->load->view('products/view_colors', $result);
    }

    public function brand() {
        // Load the view for the add page
        $data['title'] = 'Brand';
        $data['header'] = 'New Brand';
        $this->load->view('layouts/header', $data);
        $this->load->view('products/add_brand');
    }

    public function brand_submit() {
        // Set form validation rules
        $this->form_validation->set_rules('brand_name', 'Brand Name', 'required');
        $this->form_validation->set_rules('brand_id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Reload the form with validation errors
            $data['title'] = 'Add New';
            $result['header'] = 'New Brand';
            $this->load->view('layouts/header', $data);
            $this->load->view('products/add_brand', $result);
        } else {
            // Prepare data to insert into the database
            $data = array(
                'id' => $this->input->post('brand_id'),
                'brand_name' => $this->input->post('brand_name'),
            );

            // Insert data using the model
            if ($this->Product_model->insert_brand($data)) {
                $this->session->set_flashdata('success', 'Success!');
                redirect('products/displaybrand');
            } else {
                $this->session->set_flashdata('error', 'Failed to add. Try again.');
                $this->load->view('products/add_brand');
            }
        }
    }

    public function displaybrand() {
        $result['title'] = 'Brand';
        $result['table'] = 'All Brands Data';
        $result['add'] = 'Add New Brand';
        $result['data'] = $this->Product_model->get_brands();
        $this->load->view('products/view_brands', $result);
    }

    // Product name function
    public function name() {
        // Load the view for the add page
        $data['title'] = 'Product Name';
        $data['header'] = 'New Product Name';
        $this->load->view('layouts/header', $data);
        $this->load->view('products/add_product_name');
    }

    public function name_submit() {
        // Set form validation rules
        $this->form_validation->set_rules('product_name', 'Product Name', 'required');
        $this->form_validation->set_rules('product_id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Reload the form with validation errors
            $data['title'] = 'Add New';
            $result['header'] = 'New Product Name';
            $this->load->view('layouts/header', $data);
            $this->load->view('products/add_product_name', $result);
        } else {
            // Prepare data to insert into the database
            $data = array(
                'id' => $this->input->post('product_id'),
                'product_name' => $this->input->post('product_name'),
            );

            // Insert data using the model
            if ($this->Product_model->insert_product_name($data)) {
                $this->session->set_flashdata('success', 'Success!');
                redirect('products/displayproductnames');
            } else {
                $this->session->set_flashdata('error', 'Failed to add. Try again.');
                $this->load->view('products/add_product_name');
            }
        }
    }

    public function displayproductnames() {
        $result['title'] = 'Product Names';
        $result['table'] = 'All Product Names Data';
        $result['add'] = 'Add New Product Names';
        $result['data'] = $this->Product_model->get_product_names();
        $this->load->view('products/view_product_names', $result);
    }

    public function item() {
        // Load the view for the add page
        $this->load->model('Product_model');

        $data['brands'] = $this->Product_model->get_brands();
        $data['categories'] = $this->Product_model->get_categories();
        $data['names'] = $this->Product_model->get_product_names();

        $data['title'] = 'Item';
        $data['header'] = 'New Item';

        $this->load->view('layouts/header', $data);
        $this->load->view('products/add_item');
    }

    public function item_submit() {
        // Set form validation rules
        $this->form_validation->set_rules('barcode', 'barcode', 'required|min_length[2]');
        $this->form_validation->set_rules('name_id', 'name', 'required');
        $this->form_validation->set_rules('cost', 'cost', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            // return validation errors in json format
            $array = array(
                'error' => true,
                'name_error' => form_error('name_id'),
                'barcode_error' => form_error('barcode'),
                'cost_error' => form_error('cost'),
                'price_error' => form_error('price'),
            );
            echo json_encode($array);
            return;
        }
    
        // Prepare data to insert into the database
        $data = array(
            'barcode' => $this->input->post('barcode'),
            'product_id' => $this->input->post('name_id'),
            'category_id' => $this->input->post('category'),
            'brand_id' => $this->input->post('brand'),
            'cost' => $this->input->post('cost'),
            'price' => $this->input->post('price'),
        );
    
        // Insert data using the model
        if ($this->Product_model->insert_item($data)) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Form submitted successfully!'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Insert failed!'
            ]);
        }
    
        return;
    }

    public function displayitems() {
        $result['title'] = 'All Products';
        $result['table'] = 'All Products Data';
        $result['add'] = 'Add New Product';
        $result['data'] = $this->Product_model->get_item_details();
        $this->load->view('products/view_items', $result);
    }

    public function get_product_details() {
        // Load the view for the add page
        $this->load->model('Product_model');

        $barcode = $this->input->post('barcode'); 

        //query by sql
        $product = $this->Product_model->get_details_by_barcode($barcode);
        
        // if match found barcode and return echo json encode
        if ($product) {
            $array = array(
                'name' => $product->product_name,
                'category' => $product->category_name,
                'brand' => $product->brand_name
            );

            echo json_encode($array);
        }     
    }

    public function variants() {
        // Load the view for the add page
        $this->load->model('Product_model');

        $data['sizes'] = $this->Product_model->get_sizes();
        $data['colors'] = $this->Product_model->get_colors();

        // get data from joined tables
        $data['barcodes'] = $this->Product_model->get_item_details();

        $data['title'] = 'Variants';
        $data['header'] = 'New Variants';

        $this->load->view('layouts/header', $data);
        $this->load->view('products/add_variant');
    }

    public function variant_submit() {
        // Set form validation rules
        $this->form_validation->set_rules('var_id', 'Variant ID', 'required');
        $this->form_validation->set_rules('barcode', 'Barcode', 'required');
        $this->form_validation->set_rules('size', 'size', 'required');
        $this->form_validation->set_rules('color', 'color', 'required');
        $this->form_validation->set_rules('quantity', 'quantity', 'required');


        if ($this->form_validation->run() == FALSE) {
            // Reload the form with validation errors
            $data['title'] = 'Product Variants';
            $result['header'] = 'New Variants';
            $this->load->view('layouts/header', $data);
            $this->load->view('products/add_variant', $result);
        } else {
            // Prepare data to insert into the database
            $data = array(
                'id' => $this->input->post('var_id'),
                'barcode' => $this->input->post('barcode'),
                'size_id' => $this->input->post('size'),
                'color_id' => $this->input->post('color'),
                'quantity' => $this->input->post('quantity'),

            );

            // Insert data using the model
            if ($this->Product_model->insert_variant($data)) {
                $this->session->set_flashdata('success', 'Success!');
                redirect('products/displayitems');
            } else {
                $this->session->set_flashdata('error', 'Failed to add. Try again.');
                $this->load->view('products/add_variant');
            }
        }
    }

    
}
