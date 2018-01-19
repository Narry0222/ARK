<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "ARK Innovations";
        $this->load->view('home/home', $data);
    }

    public function about() {
        $data['title'] = "About Us";
        $this->load->view('home/about', $data);
    }

    public function service() {
        $data['title'] = "Services";
        $this->load->view('home/services', $data);
    }

    public function client() {
        $data['title'] = "Clients";
        $this->load->view('home/clients', $data);
    }

    public function career() {
        $data['title'] = "Careers";
        $this->load->view('home/careers', $data);
    }

    public function contact() {
        $data['title'] = "Contact Us";
        $this->load->view('home/contact', $data);
    }

    public function register_exp() {
        $data['title'] = "Experienced Registration";
        $this->load->view('home/register_exp', $data);
    }

    public function register_fshr() {

        $data['title'] = "Fresher Registration";

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error frm_vld">', '</div>');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|max_length[100]');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|max_length[100]');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|max_length[15]');
        $this->form_validation->set_rules('address', 'Address', 'trim|required|max_length[255]');
        $this->form_validation->set_rules('street', 'Street', 'trim|required|min_length[2]|max_length[75]');
        $this->form_validation->set_rules('city', 'City', 'trim|required|min_length[2]|max_length[75]');
        $this->form_validation->set_rules('district', 'District', 'trim|max_length[75]');
        $this->form_validation->set_rules('state', 'State');
        $this->form_validation->set_rules('pincode', 'Pincode', 'trim|max_length[10]');
        $this->form_validation->set_rules('phone_res', 'Phone', 'trim|max_length[15]');
        $this->form_validation->set_rules('gender', 'Gender');
        $this->form_validation->set_rules('age', 'Age', 'trim|max_length[3]');
        $this->form_validation->set_rules('ssc', 'Ssc', 'trim|required|max_length[3]');
        $this->form_validation->set_rules('inter', 'Inter', 'trim|required|max_length[3]');
        $this->form_validation->set_rules('degree', 'Degree', 'trim|required|max_length[3]');
        $this->form_validation->set_rules('masters', 'Masters', 'trim|required|max_length[3]');
        $this->form_validation->set_rules('type1', 'Type1', 'trim|required|min_length[2]|max_length[100]');
        $this->form_validation->set_rules('type2', 'Type2', 'trim|required|min_length[2]|max_length[100]');
        $this->form_validation->set_rules('location', 'Location', 'trim|required|min_length[2]|max_length[100]');
        $this->form_validation->set_rules('technology', 'Job Technology', 'trim|required|min_length[2]|max_length[100]');
        $this->form_validation->set_rules('otherLocation', 'Other Location', 'trim|max_length[100]');
        $this->form_validation->set_rules('otherTechnology', 'Other Technology', 'trim|max_length[100]');
        $this->form_validation->set_rules('passport', 'Passport', 'trim|required|min_length[2]|max_length[20]');
        $this->form_validation->set_rules('reference', 'Reference', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home/register_fshr', $data);
        } else {
            $now = date('Y-m-d H:i:s', strtotime('now'));
            $postdata = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'address' => $this->input->post('address'),
                'street' => $this->input->post('street'),
                'city' => $this->input->post('city'),
                'district' => $this->input->post('district'),
                'state' => $this->input->post('state'),
                'pincode' => $this->input->post('pincode'),
                'phone' => $this->input->post('phone_res'),
                'gender' => $this->input->post('gender'),
                'age' => $this->input->post('age'),
                'ssc' => $this->input->post('ssc'),
                'inter' => $this->input->post('inter'),
                'degree' => $this->input->post('degree'),
                'masters' => $this->input->post('masters'),
                'type1' => $this->input->post('type1'),
                'type2' => $this->input->post('type2'),
                'location' => $this->input->post('location'),
                'job_technology' => $this->input->post('technology'),
                'other_location' => $this->input->post('otherLocation'),
                'other_technology' => $this->input->post('otherTechnology'),
                'passport' => $this->input->post('passport'),
                'referred' => $this->input->post('reference'),
                'created' => $now,
                'modified' => $now
            );
            $insert = $this->db->insert('fresher', $postdata);
            if ($insert) {
                $this->session->set_flashdata('success', 'Details Submitted Successfully');
                redirect(base_url('register_fshr'));
            } else {
                $this->session->set_flashdata('error', 'Details submission Failed, try again later');
                redirect(base_url('register_fshr'));
            }
        }
    }

}
