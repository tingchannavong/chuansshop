<?php
class Variables extends CI_Controller {

        public function shoes($sandals, $id)
        {
                echo $sandals;
                echo $id;
        }
        public function necklace($jewelry, $a_id)
        {
                echo $jewelry;
                echo $a_id;
        }
}

// The file name and product name has to match for codeigniter to find, br sun mun sork br hen
class Sellers extends CI_Controller {

        public function salesman($name, $id)
        {
                echo $name;
                echo $id;
        }
}