<?php

    defined('BASEPATH') OR exit ('No direct script access allowed');
    class Main extends CI_Controller
    {

        //functions
        public function index()
        {
        $this -> load -> view("login");

        }

////////////////////////////////////////////////////////////////////////
    public function inserted(){

    $this->index();
    }
/////////////////////////////////////////////////////////////////////
    public function customAlpha($str)
    {
        if ( !preg_match('/^[a-z .,\-]+$/i',$str) )
        {
            return false;
        }
    }
////////////////////////////////////////////////////////////////////

    public function forgotPassword(){
        $this-> load -> view("forgotpwd");
    }

////////////////////////////////////////////////////////////////////

    public function adminview(){

        $this-> load -> view("adminView");
    }

    public function registernew(){

        $this-> load -> view("register");
    }

    public function acceptleave(){
        $this -> load-> model("main_model");
        $data["leave_approve"]=$this->main_model->leave_approve();
        $this-> load -> view("leaveApprove",$data);
    }

    public function view_tr_by_admin(){

        $this -> load-> model("main_model");
        $data["view_all_tr"]=$this->main_model->view_all_tr();
        $this-> load -> view("viewtrbyadmin",$data);
    }

    public function reset_admin(){

        $this-> load -> view("resetpwdadmin");
    }


/////////////////////////////////////////////////////////////////

    public function traineeview(){

        $this-> load -> view("traineeView");
    }

    public function insertdata(){

        $this-> load -> view("trainee_det");
    }
//////////////////////////////////////////////////////////////////////////
    public function viewtrdata(){
        $this->load->library('session');
        $this -> load-> model("main_model");
        $y = $this->session->userdata('username');
        $data["viewtrprofile"]=$this->main_model->viewtrprofile($y);
        $this-> load -> view("trprofile",$data);
    }

    public function update_tr_profile(){
        $this->load->library('session');
        $this -> load-> model("main_model");
        $y = $this->session->userdata('username');
        $this-> load -> view("trprofile_edit");

    }
/////////////////////////////////////////////////////////////////////////
    public function myprojects(){
        $this -> load-> model("main_model");
        $data3["fetch_project_data"]=$this->main_model->fetch_project_data();
        $this-> load -> view("myprojects",$data3);
    }

    public function extend(){

        $this-> load -> view("trextend");
    }

    public function institutedata(){

        $this-> load -> view("institute_det");
    }
    public function reset_tr(){

        $this-> load -> view("resetpwdtr");
    }
    public function leave(){

        $this-> load -> view("leave");
    }
 ////////////////////////////////////////////////////////////////////////////////////////////////
    public function reset_tr_pwd(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('opwd','Old Password','required');
        $this->form_validation->set_rules('npwd','New Password','required|matches[confirmpwd]|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('confirmpwd','Confirm Password','required|min_length[5]|max_length[20]');

        if ($this->form_validation->run()) {
            //true

                $data = array(
                   "password" => $this->input->post("npwd")
                );
            $xx = $this->input->post("opwd");
            $x = $this->session->userdata('username');
            $this->load->model("main_model");
            $this->main_model->resetpwdtr($data,$x,$xx);

            redirect(base_url() . "main/reset_tr_pwd");

        } else {
            //false
            $this->reset_tr();

        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////

    public function reset_admin_pwd(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('opwd','Old Password','required');
        $this->form_validation->set_rules('npwd','New Password','required|matches[confirmpwd]|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('confirmpwd','Confirm Password','required|min_length[5]|max_length[20]');

        if ($this->form_validation->run()) {
            //true

            $data = array(
                "password" => $this->input->post("npwd")
            );
            $xx = $this->input->post("opwd");
            $x = $this->session->userdata('username');
            $this->load->model("main_model");
            $this->main_model->resetpwdadmin($data,$x,$xx);

            redirect(base_url() . "main/reset_admin_pwd");

        } else {
            //false
            $this->reset_admin();
            //echo "Something Went Wrong, Password Not Changed";

        }
    }
/////////////////////////////////////////////////////////////////

 function login(){
        $data['title']='codeIgniter simple login form with session';
        $this-> load -> view("login",$data);
 }

 function login_validation(){

     $this->load->library('form_validation');
     $this->form_validation->set_rules('uname','Username','required');
     $this->form_validation->set_rules('pwd','Password','required');
     $this->form_validation->set_rules('state','State','required');

     if($this->form_validation->run()){
         //true
         $username = $this ->input->post('uname');
         $password = $this ->input->post('pwd');
         $state = $this ->input->post('state');

         $this->load->model('main_model');

         if($this->main_model->can_login($username,$password,$state))
         {
           $session_data = array(
                'username' => $username,
                'state' => $state
           );
           $this->session->set_userdata($session_data);
           redirect(base_url().'main/enter');
         }
         else
         {
             $this->session->set_flashdata('error','Invalid username and password');
             redirect(base_url().'main/login');
         }

     }
     else {
         //false
         $this->login(); 
     }

 }
    function logout(){
     $this->session->unset_userdata('username');
     redirect(base_url().main/login);
    }
 ////////////////////////////////////////////////////////////////

    function enter(){
     if ($this->session->userdata('username') != '' && $this->session->userdata('state')== 'Admin' )
     {
         $this-> load -> view("adminview");
        // echo '<h2>Welcome -'.$this-> session->userdata('username').'</h2>';
        // echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';
     }

       else if ($this->session->userdata('username') != '' && $this->session->userdata('state')== 'Trainee' )
        {
            $this-> load -> view("traineeview");
            //echo '<h2>Welcome -'.$this-> session->userdata('username').'</h2>';
           // echo '<label><a href="'.base_url().'main/logout">Logout</a></label>';
        }

     else
     {
         redirect(base_url().'main/login');
     }
    }
  /////////////////////////////////////////////////////////////////////
    public function register_form_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("uname", "Username", 'required|is_unique[users.username]|min_length[5]|max_length[20]');
        $this->form_validation->set_rules("pwd", "Password", 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules("state", "State", 'required|min_length[5]|max_length[20]');

        if ($this->form_validation->run()) {
            //true
            $this->load->model("main_model");
            $data = array(
                "username" => $this->input->post("uname"),
                "password" => $this->input->post("pwd"),
                "state" => $this->input->post("state"),

            );

            $this->main_model->register($data);

            redirect(base_url() . "main/register_form_validation");

        } else {
            //false
            $this->registernew();

        }

    }

 ////////////////////////////////////////////////////////////////////
public function  trdetail_validation()
{
    $this->load->library('form_validation');
    $this->form_validation->set_rules("trname", "Trainee Name", 'required');
    $this->form_validation->set_rules("trdivi", "Training Division", 'required');
    $this->form_validation->set_rules("trsup", "Training Supervisor", 'required');
    $this->form_validation->set_rules("trstart", "Start Date", 'required');
    $this->form_validation->set_rules("trend", "End Date", 'required');
    $this->form_validation->set_rules("tradrs", "Trainee Address", 'required');
    $this->form_validation->set_rules("trcnmbr", "Contact Number", 'required|exact_length[10]|numeric');


    if ($this->form_validation->run()) {
        //true
        $this->load->model("main_model");
        $data2 = array(
            // "username" =>$this->input->post("instname"),
            "trname" => $this->input->post("trname"),
            "trusername" => $this->input->post("truser"),
            "trdivision" => $this->input->post("trdivi"),
            "trsupervisor" => $this->input->post("trsup"),
            "trstart" => $this->input->post("trstart"),
            "trend" => $this->input->post("trend"),
            "traddress" => $this->input->post("tradrs"),
            "trcontact" => $this->input->post("trcnmbr")
        );

        $this->main_model->insert_trdetail($data2);

        redirect(base_url() . "main/insertdata");

    } else {
        //false
        $this->insertdata();

    }
}
/////////////////////////////////////////////////////////////////////

    public function  project_detail_validation(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules("projectnm", "Project Name",'required');
        $this->form_validation->set_rules("procontribution", "Description",'required');

        if($this->form_validation->run())
        {
            //true
            $this->load->model("main_model");
            $data3 = array(
                "proname" =>$this->input->post("projectnm"),
                "username" => $this->input->post("truser"),
                "prodescription" =>$this->input->post("procontribution")
            );

            $this->main_model->project_data($data3);

            redirect(base_url()."main/myprojects");

        }
        else
            {
            //false
            $this->myprojects();

            }

    }
////////////////////////////////////////////////////////////////////////

    public function insert_institute()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("instname", "Institute",'required');
        $this->form_validation->set_rules("instadrs", "Institute Address",'required');
        $this->form_validation->set_rules("tename", "Trainee Engineer's Name",'required');
        $this->form_validation->set_rules("cnmbr", "Contact Numer",'required|exact_length[10]|numeric');

        if($this->form_validation->run())
        {
            $this->load->model("main_model");
            $data4 = array(
                "insname" => $this->input->post("instname"),
                "insaddrs" => $this->input->post("instadrs"),
                "instecheng" => $this->input->post("tename"),
                "contactnmbr" => $this->input->post("cnmbr")
            );

            $x = $this->session->userdata('username');
            $this->main_model->insert_institute_data($data4, $x);

            redirect(base_url() . "main/institutedata");
        }
        else
            {
            //false
            $this->institutedata();
            }
        }
///////////////////////////////////////////////////////////////////////////////////////

    public function  leave_validation(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules("lbegin", "Leave Begin",'required');
        $this->form_validation->set_rules("lend", "Leave End",'required');
        $this->form_validation->set_rules("reason", "Reason",'required');

        if($this->form_validation->run())
        {
            //true
            $this->load->model("main_model");
            $data = array(
                "leave_sart" =>$this->input->post("lbegin"),
                "leave_end" => $this->input->post("lend"),
                "leave_reason" =>$this->input->post("reason"),
                "username" => $this->input->post("truser")
            );

            $this->main_model->leave_data($data);

            redirect(base_url()."main/leave");

        }
        else
        {
            //false
            $this->leave();

        }

    }

    public function accept_or_reject(){
        $this->load->model("main_model");
        if($this->input->post('accpt')){
            $query = $this->main_model->lv_accpt();
        }
    }











}
?>



