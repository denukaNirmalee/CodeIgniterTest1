<?php

class Main_model extends CI_Model{

    function insert_data($data){
        $this->db ->insert("institute", $data);
    }
    function leave_data($data){
        $this->db ->insert("leave_tbl", $data);
    }
    function insert_trdetail($data2){
        $this->db ->insert(" trainee_det", $data2);
    }

    function project_data($data3){
        $this->db ->insert("projects", $data3);
    }

    function register($data){
        $this->db ->insert("users", $data);
    }

    function fetch_project_data(){
        $this->db->where("username",$this->session->userdata('username'));
        $query = $this->db->get("projects");
        return $query;
    }


    function view_all_tr(){
        $query = $this->db->get("trainee_det");
        return $query;
    }

    function leave_approve(){

        $this->db->select('*');
        $this->db->from('leave_tbl');
        $this->db->join('trainee_det', 'trainee_det.trusername = leave_tbl.username ');
        $this->db->order_by("leaveid", "desc");
        $query = $this->db->get();
        return $query;
    }

    function lv_accpt($x){
        $this->db->where("trusername",$x);

    }

    function viewtrprofile($y){

        $this->db->where("trusername",$y);
        $query1 = $this->db->get("trainee_det");
        return $query1;
    }

    function insert_institute_data($data4,$x)
    {
       $this->db->where("trusername",$x);
       $this->db->update("trainee_det",$data4);
    }

    function resetpwdtr($data,$x,$xx)
    {
        $this->db->where("password",$xx);
        $this->db->where("username",$x);
        $this->db->update("users",$data);
    }

    function resetpwdadmin($data,$x,$xx)
    {
        $this->db->where("password",$xx);
        $this->db->where("username",$x);
        $this->db->update("users",$data);
    }

    function can_login($username,$password,$state){

        $this->db ->where("username", $username);
        $this->db ->where("password", $password);
        $this->db ->where("state", $state);

        $query = $this->db->get('users');

        if($query->num_rows()> 0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

















}
?>