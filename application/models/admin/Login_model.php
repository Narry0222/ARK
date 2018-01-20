<?php

class Login_model extends CI_Model {

    function check_cred($email, $password) {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $data = $this->db->get('admins')->row();
        if ($data) {
            $loggedin = array(
                'is_login' => true,
                'firstname' => $data->first_name,
                'lastname' => $data->last_name,
                'email' => $data->email,
                'id' => $data->id
            );
            $this->session->set_userdata($loggedin);
        } else {
            $loggedin = array(
                'is_login' => false,
            );
        }
        return $loggedin;
    }

    function getFreshers($search) {
        $name = $search['name'];
        $city = $search['city'];
        $start = $search['start'];
        $limit = $search['limit'];
        $this->db->select('*');
        $this->db->from('fresher');
        if ($name) {
            $this->db->like('name', $name);
        }
        if ($city) {
            $this->db->like('city', $city);
        }
        $this->db->limit($limit, $start);
        $data['freshers'] = $this->db->get()->result();
        $data['ttl_rows'] = $this->getFreshersCount($search);
        return $data;
    }

    function getFreshersCount($search) {
        $name = $search['name'];
        $city = $search['city'];
        $this->db->select('count(*) as ttl_rows');
        $this->db->from('fresher');
        if ($name) {
            $this->db->like('name', $name);
        }
        if ($city) {
            $this->db->like('city', $city);
        }
        $count = $this->db->get()->row();
        return $count->ttl_rows;
    }

}
