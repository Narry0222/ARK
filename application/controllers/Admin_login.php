<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->valid_user();
        $this->load->library(array('pagination'));
    }

    public function index() {
        $data['title'] = "Fresher Details";
        $data['start'] = ($this->input->get('page')) ? $this->input->get('page') : 0;
        $data['limit'] = ($this->input->get('limit')) ? $this->input->get('limit') : 10;
        $data['starting'] = ($this->input->get('page')) ? ($data['start'] - 1 ) * $data['limit'] : 0;
        $data['name'] = ($this->input->get('name')) ? $this->input->get('name') : '';
        $data['city'] = ($this->input->get('city')) ? $this->input->get('city') : '';

        $search_options = array(
            'start' => $data['starting'],
            'limit' => $data['limit'],
            'name' => $data['name'],
            'city' => $data['city']
        );
        $this->load->model('admin/login_model');
        $freshers = $this->login_model->getFreshers($search_options);

        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['use_global_url_suffix'] = FALSE;
        $config['query_string_segment'] = 'page';
        $config['total_rows'] = $freshers['ttl_rows'];
        $config['per_page'] = $data['limit'];
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $QUERY_STRING = $this->removeQueryVal($_SERVER['QUERY_STRING'], 'page');
        $config['base_url'] = site_url('admin_login/index' . $QUERY_STRING);
        $config['suffix'] = '';
        $config['first_url'] = '';
        $this->pagination->initialize($config);
        $data['ttl_rows'] = $freshers['ttl_rows'];
        $data['freshers'] = $freshers['freshers'];
        $data['pagination'] = $this->pagination->create_links();
        $data['querystring'] = $QUERY_STRING;

        $this->load->view('admin/nav_admin', $data);
    }

    function removeQueryVal($qry, $qryKey) {
        $qry_new = '';
        $qryval = array();
        if (strpos($qry, $qryKey) === false) {
            $qry_new .= ($qry) ? '?' . $qry : '';
        } else {
            if (strlen($qry) > 1) {
                $qry = (strpos($qry, "?") !== false) ? substr($qry, 1) : $qry;
                $qryArr = (strpos($qry, '&') !== false) ? explode("&", $qry) : $qry;
                if (is_array($qryArr)) {
                    foreach ($qryArr as $val) {
                        if (strpos($val, $qryKey . '=') === false) {
                            $qryPair = explode('=', $val);
                            $qry_new .= '&' . $qryPair[0] . '=' . $qryPair[1];
                        }
                    }
                }
                $qry_new = substr($qry_new, 1);
                $qry_new = ($qry_new) ? '?' . $qry_new : '';
            }
        }
        return $qry_new;
    }

    public function valid_user() {
        if (($this->session->userdata('id')) && ($this->session->userdata('is_login'))) {
            return true;
        } else {
            redirect(base_url('admin'));
        }
    }

    public function view_fresher($id) {
        $data['title'] = 'View Fresher';
        $data['fresher'] = $this->db->where('id', $id)->get('fresher')->row();
        //echo '<pre>'; print_r($data['fresher']); exit;
        $this->load->view('admin/viewFresher', $data);
    }

}
