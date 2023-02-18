<?php

class Home extends MX_Controller
{
    function __construct()
    {
        parent::__construct();

        if (get_cookie('logged') == ''){
            redirect(base_url().'login');
        }
        // if ($this->session->userdata('logged') != 1){
        //     redirect(base_url().'login');
        // }
    }

    public function index()
    {

        $data['header'] = 'layouts/profileheader';
        $data['body'] = 'index';
        $data['footer'] = 'layouts/footer';
        $data['title'] = 'Pixes | Home';

        $this->load->view('layouts/main', $data);
    }

    public function showprofile()
    {
        $usercode = $this->uri->segment(2);
        
        $this->db->where('usercode', $usercode);
        $query = $this->db->get('users');
        $output = $query->row();
        
        $query = $this->db->query('select * from tblfollow where (following = "'.session_usercode.'" and follower = "'.$usercode.'") OR (follower = "'.session_usercode.'" and following = "'.$usercode.'")');
        $output1 = $query->row();

        if(!empty($output1))
        {
            $output->isFollow = true;
            $output->status = $output1->status;
            $output->followcode = $output1->follower;
            $output->followid = $output1->id;
            $output->chatcode = $output1->chatcode;
        }
        else
            $output->isFollow = false;

        $data['userdata'] = $output;

        $data['header'] = 'layouts/profileheader';
        $data['body'] = 'showprofile';
        $data['footer'] = 'layouts/footer';
        $data['title'] = 'Pixes | Profile';

        $this->load->view('layouts/main', $data);
    }

    public function singlepost()
    {

        $data['header'] = 'layouts/profileheader';
        $data['body'] = 'singlepost';
        $data['footer'] = 'layouts/footer';
        $data['title'] = 'Pixes | Post Details';

        $this->load->view('layouts/main', $data);
    }

    public function uploadProfilePhoto()
    {

        $userid = session_user_id;

        $query = $this->db->get_where('users',array('id' => $userid));
        $output = $query->row();

        $profile_url = $output->sProfilePhotoUrl;

        if( !empty($_FILES['artworkfile']['name']))
        {
            $upload_path = 'storage/users/'.$userid;
            if (!is_dir($upload_path)) 
            {
                mkdir($upload_path, 0777, TRUE);
            }

            if(!empty($_FILES['artworkfile']['name']))
            {
                $image_ext = $_FILES['artworkfile']['type'];
                $type = explode('/',$image_ext);
                $ext = $type[1];
                $fileName = 'artworkfile_'.time().rand(10,1000).'.'.$ext;
                $result = file_upload($_FILES['artworkfile'],$upload_path,$fileName);

                if($result['status'])
                {
                    $profile_url = $upload_path.'/'.$fileName;
                }
            }
        }

        $data = array(
            'sProfilePhotoUrl'=>$profile_url
        );
        
        // $this->session->set_userdata('user_profile_photo', $profile_url);
        set_cookie('user_profile_photo',$profile_url,time()+31556926); 

        $this->db->where('id',$userid);
        $this->db->update('users',$data);

        $response = array('msg' => 'Profile Photo Uploaded Successfully', "status" => true);
    }

    public function chats()
    {
        $query = $this->db->query('select u.id,u.name,u.sProfilePhotoUrl,u.usercode,f.chatcode,f.following_id,f.follower_id from users as u Join tblfollow as f on ((u.`id` = f.`following_id` and f.`follower_id` = '.session_user_id.') OR (u.`id` = f.`follower_id` and f.`following_id` = '.session_user_id.')) and u.`id` != '.session_user_id.'');
        $output = $query->result();

        // echo "<pre>";
        // print_r($output);exit();

        $data['chat_users'] = $output;
        $data['header'] = 'layouts/profileheader';
        $data['body'] = 'chats';
        // $data['footer'] = 'layouts/footer';
        $data['extra_js'] = '<script src="https://meet.jit.si/external_api.js"></script>
        <script src="assets/assets/js/chats.js"></script>
        <script src="assets/assets/js/TweenMax.min.js"></script>
        <script src="assets/assets/js/gsap.min.js"></script>
        <script src="assets/assets/js/Draggable.min.js"></script>';

        $data['title'] = 'Pixes | Chats';

        $this->load->view('layouts/main', $data);
    }

    public function reels()
    {

        $data['header'] = 'layouts/profileheader';
        $data['body'] = 'reels';
        $data['footer'] = 'layouts/footer';
        $data['title'] = 'Pixes | Reels';
        $data['extra_js'] = '<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script><script src="assets/assets/reels/js/custom.js"></script>';

        $this->load->view('layouts/main', $data);
    }

    public function notification()
    {

        $data['header'] = 'layouts/profileheader';
        $data['body'] = 'notification';
        $data['footer'] = 'layouts/footer';
        $data['title'] = 'Pixes | Notification';
        $data['extra_js'] = '<script src="assets/assets/notification/js/custom.js"></script>';

        $this->load->view('layouts/main', $data);
    }

    public function search()
    {
        $this->db->where('id != '.get_cookie('user_id').'');
        $query = $this->db->get('users');
        $data['userdata'] = $query->result();

        $data['header'] = 'layouts/profileheader';
        $data['body'] = 'search';
        $data['footer'] = 'layouts/footer';
        $data['title'] = 'Pixes | Search';
        $data['extra_js'] = '<script src="assets/assets/notification/js/custom.js"></script>';

        $this->load->view('layouts/main', $data);
    }

    public function followuser()
    {
        $follower = session_usercode;
        $following = $this->input->post('user_code');

        $following_id = getUserDataFromCode($following)->id;
        $follower_id = session_user_id;

        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
      
        while (true) {
            $myrefcode = "";
            for($i=0;strlen($myrefcode)<20;$i++)
                $myrefcode.=substr($chars,rand(0,strlen($chars)),1);
            $stmt = $this->db->query('select count(*) as num from tblfollow where chatcode = "'.$myrefcode.'"');
            $row = $stmt->row();
            if($row->num > 0){
                continue;
            }else{
                break;
            }
        }

        $data = array(
            'following'=>$following,
            'follower'=>$follower,
            'following_id'=>$following_id,
            'follower_id'=>$follower_id,
            'chatcode'=>$myrefcode
        );

        $this->db->insert('tblfollow',$data);

        $response = array('msg' => 'Follow Request Sent Successfully', "status" => true);

        echo json_encode($response);
        return;
    }

    public function acceptFollowRequest()
    {
        $followid = $this->input->post('followid');

        $data = array(
            'status'=> 1
        );

        $this->db->where('id',$followid);
        $this->db->update('tblfollow',$data);

        $response = array('msg' => 'Follow Request Accepted Successfully', "status" => true);

        echo json_encode($response);
        return;
    }

    public function getChatWindow()
    {
        $chatcode = $this->input->post('chatcode');
        $lastmsgtime = $this->input->post('lastmsgtime');
        $html = '';

        $this->db->where('chatcode' , $chatcode);

        $query = $this->db->get('messages');

        $output = $query->result();

        for ($i=0; $i < count($output); $i++) { 

            $replied_msg = "";
            if($output[$i]->reply_id != 0)
            {
                $replied_msg = getRepliedMsg($output[$i]->reply_id);
            }
            
            if($output[$i]->usercode == session_usercode)
            {
                $html .= '<li class="drag-div" ondblclick="dobleclick_to_reply(this)" data-id="'.$output[$i]->id.'" data-msg="'.$output[$i]->message.'">
                            <div class="chat__bubble chat__bubble--me">';
                                if($replied_msg != "")
                                {
                                    $html .= '<span class="reply-msg"><span class="reply-container">'.$replied_msg.'</span></span>';
                                }
                                
                                $html .= '<span class="main-msg">'.$output[$i]->message.'</span>
                            </div>
                        </li>';
            }   
            else{
                $html .= '<li class="drag-div" ondblclick="dobleclick_to_reply(this)" data-id="'.$output[$i]->id.'" data-msg="'.$output[$i]->message.'">
                            <div class="chat__bubble chat__bubble--you">';
                                if($replied_msg != "")
                                {
                                    $html .= '<span class="reply-msg"><span class="reply-container">'.$replied_msg.'</span></span>';
                                }
                                
                                $html .= '<span class="main-msg">'.$output[$i]->message.'</span>
                            </div>
                        </li>';
            }

            $lastmsgtime = $output[$i]->timestamp;

        }

        $response = array('chat' => $html, "lastmsgtime" => $lastmsgtime);

        echo json_encode($response);
        return;
    }

    public function getNewMsg()
    {
        $chatcode = $this->input->post('chatcode');
        $lastmsgtime = $this->input->post('lastmsgtime');
        $html = '';

        $this->db->where('chatcode' , $chatcode);
        $this->db->where('timestamp > "'.$lastmsgtime.'"');

        $query = $this->db->get('messages');

        $output = $query->result();

        for ($i=0; $i < count($output); $i++) { 

            $replied_msg = "";
            if($output[$i]->reply_id != 0)
            {
                $replied_msg = getRepliedMsg($output[$i]->reply_id);
            }
            
            if($output[$i]->usercode == session_usercode)
            {
                $html .= '<li class="drag-div" ondblclick="dobleclick_to_reply(this)" data-id="'.$output[$i]->id.'" data-msg="'.$output[$i]->message.'">
                            <div class="chat__bubble chat__bubble--me">';
                                if($replied_msg != "")
                                {
                                    $html .= '<span class="reply-msg"><span class="reply-container">'.$replied_msg.'</span></span>';
                                }
                                
                                $html .= '<span class="main-msg">'.$output[$i]->message.'</span>
                            </div>
                        </li>';
            }   
            else{
                $html .= '<li class="drag-div" ondblclick="dobleclick_to_reply(this)" data-id="'.$output[$i]->id.'" data-msg="'.$output[$i]->message.'">
                            <div class="chat__bubble chat__bubble--you">';
                                if($replied_msg != "")
                                {
                                    $html .= '<span class="reply-msg"><span class="reply-container">'.$replied_msg.'</span></span>';
                                }
                                
                                $html .= '<span class="main-msg">'.$output[$i]->message.'</span>
                            </div>
                        </li>';
            }

            $lastmsgtime = $output[$i]->timestamp;

        }

        $response = array('chat' => $html, "lastmsgtime" => $lastmsgtime);

        echo json_encode($response);
        return;
    }

    public function sendNewMsg()
    {
        $chatcode = $this->input->post('chatcode');
        $message = $this->input->post('message');
        $reply_id = $this->input->post('reply_id');
        $usercode = session_usercode;
        
        $data = array(
            'usercode'=>$usercode,
            'chatcode'=>$chatcode,
            'message'=>$message,
            'reply_id'=>$reply_id
        );

        $this->db->insert('messages',$data);

        $response = array('msg' => 'Message Sent Successfully', "status" => true);

        echo json_encode($response);
        return;
    }

    public function getHeader()
    {
        $chatcode = $this->input->post('chatcode');
        
        $query = $this->db->query('select * from users where id in (select following_id from tblfollow where chatcode = "'.$chatcode.'" and follower_id = '.session_user_id.') OR id in (select follower_id from tblfollow where chatcode = "'.$chatcode.'" and following_id = '.session_user_id.')');

        $output = $query->row();
        
        $html = '<div class="chat-member__wrapper" data-online="true">
                    <div class="chat-member__avatar">
                        <img src="'.$output->sProfilePhotoUrl.'" alt="'.$output->name.'" loading="lazy">
                        
                    </div>
                    <div class="chat-member__details">
                        <span class="chat-member__name">'.$output->name.'</span>
                        
                    </div>
                </div>';

        echo $html;
        return;
    }

    public function getProfileDetails()
    {
        $chatcode = $this->input->post('chatcode');
        
        $query = $this->db->query('select * from users where id in (select following_id from tblfollow where chatcode = "'.$chatcode.'" and follower_id = '.session_user_id.') OR id in (select follower_id from tblfollow where chatcode = "'.$chatcode.'" and following_id = '.session_user_id.')');

        $output = $query->row();
        
        $html = '<div class="user-profile__close d-flex d-xl-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 38.8 38.9">
                        <g>
                        <path d="M2,38.9a1.9,1.9,0,0,1-1.4-.5,2.1,2.1,0,0,1,0-2.9L35.4.6a1.9,1.9,0,0,1,2.8,0,1.9,1.9,0,0,1,0,2.8L3.4,38.4A1.9,1.9,0,0,1,2,38.9Z" fill="#d87232" />
                        <path d="M36.8,38.9a1.9,1.9,0,0,1-1.4-.5L.6,3.4A1.9,1.9,0,0,1,.6.6,1.9,1.9,0,0,1,3.4.6L38.2,35.5a2.1,2.1,0,0,1,0,2.9A1.9,1.9,0,0,1,36.8,38.9Z" fill="#d87232" />
                        </g>
                    </svg>
                    </div>
                    <div class="user-profile__wrapper">
                    <div class="user-profile__avatar">
                        <img src="'.$output->sProfilePhotoUrl.'" alt="'.$output->name.'" loading="lazy">
                    </div>
                    <div class="user-profile__details mt-1">
                        <span class="user-profile__name">'.$output->name.'</span>
                        <a href="tel:+91'.$output->phone.'" class="user-profile__phone">'.$output->phone.'</a>
                        <a href="mailto:'.$output->email.'" class="user-profile__phone">'.$output->email.'</a>
                    </div>';

        echo $html;
        return;
    }

}