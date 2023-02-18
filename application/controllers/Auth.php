<?php
class Auth extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function login()
    {

        $data['header'] = '';
        $data['body'] = 'login';
        $data['footer'] = '';
        $data['title'] = 'Pixes | Login';

        $this->load->view('layouts/main', $data);
    }

    public function completeLogin()
    {

        $username=$this->input->post('email');
        $password=$this->input->post('password');

        $hash_password = hashPass($password);

        $this->db->group_start()
        ->where('email' , $username)
        ->group_end()
        ->where('password' , $hash_password);

        $query = $this->db->get('users');

        $output = $query->result();

        if(!empty($output))
        {
            // $this->session->set_userdata('logged', 1);
            // $this->session->set_userdata('user_id', $output[0]->id);
            // $this->session->set_userdata('user_profile_photo', $output[0]->sProfilePhotoUrl);

            set_cookie('logged',1,time()+31556926); 
			set_cookie('user_id',$output[0]->id,time()+31556926); 
			set_cookie('usercode',$output[0]->usercode,time()+31556926); 
			set_cookie('user_profile_photo',$output[0]->sProfilePhotoUrl,time()+31556926); 

            $response = array('msg' => 'Login Successfully', "status" => true);

        }else{
            // $this->session->set_flashdata('err', 'Username or Password Does Not Match');
            $response = array('err' => 'Username or Password Does Not Match', "status" => false);
        }

        echo json_encode($response);
        return;
    }

    public function logout()
    {
        // $this->session->unset_userdata('logged');
        // $this->session->unset_userdata('user_id');
        // $this->session->unset_userdata('user_profile_photo');
		delete_cookie('user_profile_photo'); 
		delete_cookie('logged'); 
		delete_cookie('user_id'); 
		delete_cookie('usercode');
        redirect(base_url().'login'); 
    }

    public function signup()
    {

        $data['header'] = '';
        $data['body'] = 'signup';
        $data['footer'] = '';
        $data['title'] = 'Pixes | Login';

        $this->load->view('layouts/main', $data);
    }
    
    public function completeSignup()
    {
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $password=$this->input->post('password');

        $hash_password = hashPass($password);

        $profile_url = "assets/assets/images/banner1.jpg";

        // if( !empty($_FILES['artworkfile']['name']) )
        // {
        //     $upload_path = 'uploads/users/'.$newUserId;
        //     if (!is_dir($upload_path)) 
        //     {
        //         mkdir($upload_path, 0777, TRUE);
        //     }

        //     if(!empty($_FILES['artworkfile']['name']))
        //     {
        //         $ext = pathinfo($_FILES['artworkfile']['name'], PATHINFO_EXTENSION);
        //         $fileName = 'artworkfile_'.time().rand(10,1000).'.'.$ext;
        //         $result = file_upload($_FILES['artworkfile'],$upload_path,$fileName);
        //         if($result['status'])
        //         {
        //             $profile_url = $upload_path.'/'.$fileName;
        //         }
        //     }
        // }

        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
      
        while (true) {
            $myrefcode = "";
            for($i=0;strlen($myrefcode)<20;$i++)
                $myrefcode.=substr($chars,rand(0,strlen($chars)),1);
            $stmt = $this->db->query('select count(*) as num from users where usercode = "'.$myrefcode.'"');
            $row = $stmt->row();
            if($row->num > 0){
                continue;
            }else{
                break;
            }
        }

        $data = array(
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'password'=>$hash_password,
            'usercode'=>$myrefcode,
            'sProfilePhotoUrl'=>$profile_url
        );

        $query = $this->db->get_where('users',array('email' => $email));
        $email_output = $query->row();

        $query = $this->db->get_where('users',array('phone' => $phone));
        $phone_output = $query->row();

        if(!empty($email_output))
        {
            $response = array('err' => 'Email ID already registered', "status" => false);

        }
        else if(!empty($phone_output))
        {
            $response = array('err' => 'Phone Number already registered', "status" => false);

        }else{
            $this->db->insert('users',$data);

            $query = $this->db->get_where('users',array('email' => $email));
            $newuser_output = $query->row();

            // $this->session->set_userdata('logged', 1);
            // $this->session->set_userdata('user_profile_photo', $newuser_output->sProfilePhotoUrl);
            // $this->session->set_userdata('user_id', $newuser_output->id);

            set_cookie('logged',1,time()+31556926); 
			set_cookie('user_id',$newuser_output->id,time()+31556926); 
			set_cookie('usercode',$newuser_output->usercode,time()+31556926); 
			set_cookie('user_profile_photo',$newuser_output->sProfilePhotoUrl,time()+31556926); 

            $response = array('msg' => 'Register Successfully', "status" => true);
        }

        echo json_encode($response);
        return;
    }

}