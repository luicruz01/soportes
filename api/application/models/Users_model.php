<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

    function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
		//error_reporting(E_ALL);
    }

	
	//API
    
    function is_user($params){
    	$result = array(	'status' => false,
							'result' => array());

        if (isset($params) AND count($params) > 0) {
            extract($params);

            if (isset($user_id) AND is_numeric($user_id) AND $user_id > 0) {
                $this->db->select('*');
                $this->db->where('CveCliente', $user_id);

                $query = $this->db->get('clientes');

                if ($query->num_rows() > 0) {
                    $result['status'] = True;
                    $result['result'] = $user_id;
                }
            }
        }

		return $result;
    }

}// end class