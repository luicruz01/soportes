<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Soportes_Api {
    
    public function execute_call($function) {
        $self = & get_instance();
        
        switch ($function) {

            case "users":
                $self->benchmark->mark('code_start');
                $result = $this->users_api();
                $self->benchmark->mark('code_end');
                $this->build_response($result, $function);
                break;

            case "items":
                $self->benchmark->mark('code_start');
                $result = $this->items_api();
                $self->benchmark->mark('code_end');
                $this->build_response($result, $function);
                break;
            default:
                echo "Function Error";
                break;
        }
    }// end execute_call()

    private function build_response($result, $function) {
        $self = & get_instance();

        $response = array();
        $response['status'] = 'OK';
        $response['function'] = $self->uri->segment(2) . '/' . $self->uri->segment(3);
        $response['response_time'] = $self->benchmark->elapsed_time('code_start', 'code_end');
        $response['result_count'] = count($result);
        $response['data'] = $result;
        
        if (sizeof($response['data']) > 0 && (is_array($response['data']) || is_object($response['data'])) && $response['data'] !== false) {
            $response['header_col_names'] = array();
            $storedHeader = array();
            foreach ($response['data'] as $indiceDato => $renglon) {
                
                if (is_array($renglon)) {
                    $renglonObjecto = (object) $renglon;
                } else {
                    $renglonObjecto = $renglon;
                }
                if (is_object($renglonObjecto)) {
                    foreach ($renglonObjecto as $indiceCampo => $campo) {
                        if (!in_array($indiceCampo, $storedHeader) && $indiceCampo != '') {
                            $response['header_col_names'][] = new stdClass;
                            $headerCount = sizeof($response['header_col_names']) - 1;
                            $response['header_col_names'][$headerCount] = new stdClass;
                            $response['header_col_names'][$headerCount]->name = $indiceCampo;
                            $response['header_col_names'][$headerCount]->label = ucwords(str_replace('_', ' ', $indiceCampo));
                            $response['header_col_names'][$headerCount]->order = $headerCount + 1;
                            $storedHeader[] = $indiceCampo;
                        }
                    }
                }
            }
        }
        
        echo json_encode($response);
    }// end build_response()

    private function users_api() {
        $self = & get_instance();

        $self->load->model('users_model', 'Users_model', true);

        $call_function = $self->uri->segment(3);
        switch ($call_function) {
            case 'is_user':
                $params['user_id'] = $self->input->get('user_id');
                $result = $self->Users_model->is_user($params);
                break;
            default:
                $result = 'Error';
                break;
        }

        return $result;
    }// end users_api()

    private function items_api() {
        $self = & get_instance();

        $self->load->model('items_model', 'Items_model', true);

        $call_function = $self->uri->segment(3);
        switch ($call_function) {
            
            case "search_items":      //ADMIN-1, STORE, PUBLIC
                $params['line_id'] = $self->input->get('line_id');
                $params['brand_id'] = $self->input->get('brand_id');
                $params['model_id'] = $self->input->get('model_id');
                $params['year_id'] = $self->input->get('year_id');
                $result = $self->Items_model->search_items($params);
                break;
            case 'search_by_number_star':
                $params['star_number'] = $self->input->get('star_number');
                $result = $self->Items_model->search_by_number_star($params);
                break;
            case "get_lines":
                $result = $self->Items_model->get_lines();
                break;
            case "get_brands":      //ADMIN-1, STORE, PUBLIC
                $params['line_id'] = $self->input->get('line_id');
                $result = $self->Items_model->get_brands($params);
                break;
            case "get_models":
                $params['line_id'] = $self->input->get('line_id');
                $params['brand_id'] = $self->input->get('brand_id');
                $result = $self->Items_model->get_models($params);
                break;
            case "get_years":
                $params['line_id'] = $self->input->get('line_id');
                $params['brand_id'] = $self->input->get('brand_id');
                $params['model_id'] = $self->input->get('model_id');
                $result = $self->Items_model->get_years($params);
                break;
            default:
                $result = 'Error';
                break;
        }

        return $result;
    }// end items_api()

    
}// end class

/* End of file Api.php */
