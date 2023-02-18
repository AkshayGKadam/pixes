<?php 

function hashPass($string)
{
   return hash('sha512', $string . config_item('encryption_key'));
}

function file_upload($file,$upload_path,$file_name,$allowed_types='gif|jpg|png|jpeg|bmp|mp4|svg|mp3|pdf|doc|docx|gltf|glb|tmp|blob'){
	$ci =& get_instance();

	$_FILES['file']['name']     = $file['name']; 
	$_FILES['file']['type']     = $file['type']; 
	$_FILES['file']['tmp_name'] = $file['tmp_name']; 
	$_FILES['file']['error']    = $file['error']; 
	$_FILES['file']['size']     = $file['size']; 

	$config = array();
	$config['upload_path'] = $upload_path;
	$config['allowed_types'] = "*";
	$config['remove_spaces'] = TRUE;
	$config['overwrite'] = FALSE;
	$config['file_name'] = $file_name;
	
    $ci->upload->initialize($config);
	if($ci->upload->do_upload('file')){
		$response['status'] = true;
		$response['message'] = $ci->upload->data();
	}else{
		$response['status'] = false;
		$response['error'] = $ci->upload->display_errors();
	}

	return $response;
}

function isFileExists($image_path='') {


    if ( is_file($image_path) && !empty($image_path) && file_exists(FCPATH. $image_path)) {
        return base_url($image_path);
    }else {
        return base_url('assets/img/avatar.png');
    }

}

function getUserDataFromCode($usercode) {

	$CI = get_instance();

	$CI->db->group_start()
	->where('usercode' , $usercode)
	->group_end();

	$query = $CI->db->get('users');

	$output = $query->row();

	return $output;

}

function getRepliedMsg($reply_id) {

	$CI = get_instance();

	$CI->db->group_start()
	->where('id' , $reply_id)
	->group_end();

	$query = $CI->db->get('messages');

	$output = $query->row();

	return $output->message;

}


?>