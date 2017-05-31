<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items_model extends CI_Model {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
		//error_reporting(E_ALL);
    }

	
	//API
	function search_items($params){

		$result = array(	'status' => false,
							'result' => array());

	    if(isset($params) AND count($params) > 0){
	    	extract($params);

	    	$this->db->select('DISTINCT I.*, B.name AS brand, B.brand_id, M.name AS model, M.model_id, L.name AS line', false);
	    	$this->db->join('Line AS L', 'L.line_id = I.line_id', 'inner');
	    	$this->db->join('Items_has_Brands AS IHB', 'I.item_id = IHB.item_id', 'inner');
	    	$this->db->join('Brands AS B', 'IHB.brand_id = B.brand_id', 'inner');
	    	$this->db->join('Models AS M', 'M.brand_id = B.brand_id', 'inner');
            $this->db->order_by('L.line_id, I.name, B.name, M.name', 'ASC');
	    	if (isset($line_id) AND $line_id > 0 AND is_numeric($line_id)) {
	    		$this->db->where('L.line_id', $line_id);
	    	}
	    	if (isset($brand_id) AND is_numeric($brand_id) AND $brand_id > 0) {
	    		$this->db->where('B.brand_id', $brand_id);
	    	}
	    	if (isset($model_id) AND is_numeric($model_id) AND $model_id > 0) {
	    		$this->db->where('M.model_id', $model_id);
	    	}
	    	if (isset($year_id) AND is_numeric($year_id) AND $year_id > 0) {
                $this->db->join('Models_has_Years AS MHY', 'MHY.model_id = M.model_id', 'inner');
                $this->db->join('Years AS Y', 'Y.year_id = MHY.year_id', 'inner');
	    		$this->db->where('Y.year_id', $year_id);
	    	}

	    	$query = $this->db->get('Items AS I');
			if ($query->num_rows() > 0) {
                $search = array();

                foreach ($query->result() as $row) {
                    $row->years = array();
                    $row->uri = "";
                    $this->db->select("DISTINCT Y.year", false);
                    $this->db->join("Models_has_Years AS MHY", "MHY.year_id = Y.year_id", "inner");
                    $this->db->join("Models AS M", "M.model_id = MHY.model_id", "inner");
                    $this->db->order_by('Y.year', 'ASC');

                    $this->db->where('M.brand_id', $row->brand_id);
                    $this->db->where('M.model_id', $row->model_id);


                    $years = $this->db->get('Years AS Y'); 

                    if ($years->num_rows() > 0) {
                        foreach ($years->result() as $year) {
                            array_push($row->years, $year->year);
                        }
                    }

                    //Get Item URI
                    $itemName = strtolower($row->description);
                    $itemUri = explode(" ", $itemName);
                    foreach ($itemUri as $uri) {
                        $row->uri .= ($uri."-");
                    }
                    $row->uri .= $row->star_number;
                    array_push($search, $row);
                }
				$result['status'] = true;
				$result['result'] = $search;
			}
			
			
	    } else {
	    	$this->output->set_status_header('400');
	    }
	    return $result;
    }// end search_items()

    function search_by_number_star($params){

    	$result = array(	'status' => false,
							'result' => array());

    	if (isset($params) AND count($params) > 0) {
    		extract($params);

    		if (isset($star_number) AND is_numeric($star_number) AND $star_number > 0) {
    			$this->db->select('DISTINCT I.*', false);
    			$this->db->where('I.star_number', $star_number);

    			$query = $this->db->get('Items AS I');

    			if ($query->num_rows() > 0) {
					$result['status'] = true;
					$result['result'] = $query->result();
				}
    		}
    	}


    	return $result;
    }// end search_by_number_star()

    function get_lines(){

    	$result = array(	'status' => false,
							'result' => array());

    	$this->db->select('L.*');
    	$this->db->order_by('L.line_id', 'ASC');
    	$query = $this->db->get('Line AS L');

    	if ($query->num_rows() > 0) {
			$result['status'] = true;
			$result['result'] = $query->result();
		}

		return $result;
    }// end get_lines()

    function get_brands($params){

    	$result = array(	'status' => false,
							'result' => array());

    	if (isset($params) AND count($params) > 0) {
    		extract($params);

    		//if (isset($line_id) AND is_numeric($line_id) AND $line_id > 0) {
    			$this->db->select('DISTINCT B.*', false);
    			//$this->db->join('Items_has_Brands AS IHB', 'IHB.brand_id = B.brand_id', 'inner');
    			//$this->db->join('Items AS I ', 'I.item_id = IHB.item_id', 'inner');
                //$this->db->join('Line AS L', 'L.line_id = I.line_id', 'inner');
    			//$this->db->where('L.line_id', $line_id);
    			$this->db->order_by('B.name', 'ASC');
                
    			$query = $this->db->get('Brands AS B');

    			if ($query->num_rows() > 0) {
					$result['status'] = True;
					$result['result'] = $query->result();
				}
    		//}
    	}
    	return $result;
    }// end get_brands()

    function get_models($params){

    	$result = array(	'status' => false,
							'result' => array());

    	if (isset($params) AND count($params) > 0) {
    		extract($params);

    		if (isset($brand_id) AND is_numeric($brand_id) AND $brand_id > 0 ) {
    			$this->db->select('DISTINCT M.*', false);
    			$this->db->join('Brands AS B', 'M.brand_id = B.brand_id', 'inner');
    			$this->db->join('Items_has_Brands AS IHB', 'IHB.brand_id = B.brand_id','inner');
    			$this->db->join('Items AS I', 'I.item_id = IHB.item_id', 'inner');
                $this->db->join('Line AS L', 'L.line_id = I.line_id', 'inner');
                if (isset($line_id) AND is_numeric($line_id) AND $line_id > 0) {
                    $this->db->where('L.line_id', $line_id);    
                }
    			$this->db->where('B.brand_id', $brand_id);
    			$this->db->order_by('M.name', 'ASC');

    			$query = $this->db->get('Models AS M');

    			if ($query->num_rows() > 0) {
					$result['status'] = True;
					$result['result'] = $query->result();
				}
    		}
    	}

    	return $result;

    }// end get_models()

    function get_years($params){

    	$result = array(	'status' => false,
							'result' => array());

    	if (isset($params) AND count($params) > 0) {
    		extract($params);

    		if (isset($line_id) AND is_numeric($line_id) AND $line_id > 0 AND isset($brand_id) AND is_numeric($brand_id) AND $brand_id > 0 AND isset($model_id) AND is_numeric($model_id) AND $model_id > 0) {

    			$this->db->select('DISTINCT Y.*', false);
    			$this->db->join('Models_has_Years AS MHY', 'MHY.year_id = Y.year_id', 'inner');
    			$this->db->join('Models AS M', 'MHY.model_id = M.model_id', 'inner');
    			$this->db->join('Brands AS B', 'M.brand_id = B.brand_id', 'inner');
    			$this->db->join('Items_has_Brands AS IHB ', 'IHB.brand_id = B.brand_id', 'inner');
    			$this->db->join('Items AS I', 'I.item_id = IHB.item_id', 'inner');
                $this->db->join('Line AS L', 'L.line_id = I.line_id', 'inner');
    			$this->db->where('L.line_id', $line_id);
    			$this->db->where('B.brand_id', $brand_id);
    			$this->db->where('M.model_id', $model_id);
    			$this->db->order_by('Y.year', 'ASC');

    			$query = $this->db->get('Years AS Y');

    			if ($query->num_rows() > 0) {
					$result['status'] = True;
					$result['result'] = $query->result();
				}
    		}
    	}
    	return $result;
    }// end get_years()
    
    function is_user($params){
    	$result = array(	'status' => false,
							'result' => array());

    	extract($params);

    	$this->db->select('*');
    	$this->db->where('CveCliente', $user_id);

    	$query = $this->db->get('clientes');

    	if ($query->num_rows() > 0) {
			$result['status'] = True;
			$result['result'] = $query->result();
		}

		return $result;
    }

}// end class