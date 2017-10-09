<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
//require APPPATH . '/libraries/MY_Upload.php';

class Offer_list extends BaseController
{
  public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();  
        $this->load->model('list_model');
    }
    
    public function index()
    {
        $status = 1;
        $result = $this->list_model->getListing();
        //print_r($result);exit();
        $data['travelerlist'] = $result;
        // $result = null;
        // $data['travelerlist'] = null;
        $this->global['pageTitle'] = 'All Listing';
        $this->loadViews("cms/listing_view", $this->global, $data , NULL);
    }

    public function singleList($lId = NULL)
    {
        if ($lId != NULL) 
        {
            $result = $this->list_model->getList($lId);
            $data['listData'] = $result;
            $this->global['pageTitle'] = 'All Listing';
            $this->loadViews("cms/add_list", $this->global, $data , NULL);

        } else
        {
            redirect('cms/listing_view');
        }
    }

    public function newList()
    {
        $data['travelerlist'] = null;
        $this->global['pageTitle'] = 'Add New List';
        $this->loadViews("cms/add_list", $this->global, $data , NULL);   
    }

    public function addList()
    {
        //load global
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        

        //validations of form fields
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('slug', 'Slug', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('company', 'Company', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('active', 'Active', 'required');

        $this->form_validation->set_rules('address', 'Address');
        $this->form_validation->set_rules('web', 'Web URL');
        $this->form_validation->set_rules('tel', 'Tele Phone');
        $this->form_validation->set_rules('mobile', 'Mobile');
        $this->form_validation->set_rules('timefrom', 'Opening Time');
        $this->form_validation->set_rules('timeto', 'Closing Time');
        $this->form_validation->set_rules('expireOn', 'Offer Expire On');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('cms/add_list');
        }
            else
        {
            // set the fields of form
            $admin = 1;
            $date = date("Y-m-d H:i:s");;
            $title = $this->input->post('title');
            $slug = $this->input->post('slug');
            $category = $this->input->post('category');
            $type = $this->input->post('type');
            $company = $this->input->post('company');
            $description = $this->input->post('description');
            $active = $this->input->post('active');

            $price = $this->input->post('price');
            $free = $this->input->post('free');
            $featured = $this->input->post('featured');

            $address = $this->input->post('address');
            $web = $this->input->post('web');
            $tel = $this->input->post('tel');
            $mobile = $this->input->post('mobile');
            $timefrom = $this->input->post('timefrom');
            $timeto = $this->input->post('timeto');
            $expire = $this->input->post('expireOn');

            $editLid = $this->input->post('editLid');
            $new_name = $slug;
            $imgname = '';
            $result = '';
            $listid = '';
            //exit($expire);

            if (empty($free)) {
                
                $free = 0;
            }
            if (empty($featured)) {
                
                $featured = 0;
            }
            // image upload only work if state is new list 
            // not work in edit
            if(empty($editLid))
            {
                //image uplaod 
                // having issue with resize also not set the restirction things
                $config = array(
                    'upload_path'   => './uploads/',
                    'allowed_types' => 'gif|jpg|jpeg|png',
                    'max_size'      => 0,
                    'encrypt_name'     => true
                );

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('imgfile'))
                    {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('cms/add_list', $error);
                    }
                    else
                    {
                        $imgname = $this->upload->data('file_name');
                        $imgfpth = $this->upload->data('full_path');
                        // load library
                        $image = $this->upload->data();
                        $this->load->library('image_lib');
                        $configr = array(
                            'image_library'   => 'gd2',
                            'source_image' => './uploads/6a7630dad83afb4b91d6d3b6fb2c30bf.jpg',
                            'maintain_ratio'  => true,
                            'create_thumb' => TRUE,
                            'height'  => 163
                         );
                        $this->load->library('image_lib', $configr);
                        if (!$this->image_lib->resize()) {
                            echo $this->image_lib->display_errors();
                            
                        } 
                    }
            }
            
            
            // create array for insert the data
            $listarray = array('list_title'=>$title, 'list_slug'=>$slug, 'list_desc'=>$description, 'category_id'=>$category, 'type_id'=>$type, 'company_id'=>$company, 'is_active'=>$active, 'is_featured'=>$featured, 'is_free'=>$free, 'price'=>$price, 'created_by'=>$admin, 'update_by'=>$admin, 'created_at'=>$date, 'updated_at'=>$date);
            //list extra data array
            $listinfo = array('list_id'=>$listid,'address'=>$address, 'web'=>$web, 'tel'=>$tel, 'mobile'=>$mobile, 'toHours'=>$timeto, 'fromHours'=>$timefrom, 'expire'=>$expire);
            // list image array
            $imgarray = array('list_id'=>$listid, 'image_name'=>$imgname, 'isMain'=>1);

            if(empty($editLid))
            {
                $result = $this->list_model->addList($listarray,$listinfo,$imgarray);
            } else {
                $result = $this->list_model->updateList($listarray,$listinfo,$editLid);
            }
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'Your List is Saved successfully!');
            }
            else
            {
                $this->session->set_flashdata('error', 'Having Issue kindly contact administrator');
            }            
            redirect('cms/listing');

        }

    }

    public function changeImg()
    {
        $this->load->helper(array('form', 'url'));

        $editLid = $this->input->post('editLid');
        $OimgName = $this->input->post('OimgName');

        //image uplaod 
        // having issue with resize also not set the restirction things
        $config = array(
            'upload_path'   => './uploads/',
            'allowed_types' => 'gif|jpg|jpeg|png',
            'max_size'      => 0,
            'encrypt_name'     => true
            );

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('imgfile'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('cms/add_list', $error);
            }
            else
            {
                
                unlink("./uploads/".$OimgName);
                $imgname = $this->upload->data('file_name');
                $imgfpth = $this->upload->data('full_path');
                // load library
                $image = $this->upload->data();
                $this->load->library('image_lib');
                $configr = array(
                    'image_library'   => 'gd2',
                    'source_image' => $imgfpth,
                    'maintain_ratio'  => true,
                    'create_thumb' => TRUE,
                    'height'  => 163
                 );
                $this->load->library('image_lib', $configr);
                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                    
                } 
            }

        $imgarray = array('list_id'=>$editLid, 'image_name'=>$imgname, 'isMain'=>1);

        $result = $this->list_model->changeImg($imgarray,$editLid);

        if($result > 0)
            {
                $this->session->set_flashdata('success', 'Your List is Saved successfully!');
            }
            else
            {
                $this->session->set_flashdata('error', 'Having Issue kindly contact administrator');
            } 
        redirect('cms/list/'.$editLid, 'refresh');        
    }

    public function delList($lID)
    {
        $status_array = array();
        $status = 0;
        $status_array = array(
        'is_active'=>$status,
        'updated_at'=>date('Y-m-d H:i:s')
        );

        $result = $this->list_model->delList($lID,$status_array);

        if($result > 0)
        {
            $this->session->set_flashdata('success', 'Your List is Delete successfully!');
        }
        else
        {
            $this->session->set_flashdata('error', 'Having Issue kindly contact administrator');
        }
        redirect('cms/listing');

    }

    

    // public function closedReq()
    // {
    //     $status = 0;
    //     $result = $this->traveler_model->requestList($status);
    //     $data['travelerlist'] = $result;
    //     $this->global['pageTitle'] = 'Request List';
    //     $this->loadViews("cms/request_list", $this->global, $data , NULL);
    // }

    // public function request($rId = NULL)
    // {
    //     if ($rId != NULL) {
            
    //         $result = $this->traveler_model->singleRequest($rId);
    //         $msgs = $this->traveler_model->getallMsgs($rId);
    //         $data['req_id'] = $rId;
    //         $data['reqData'] = $result;
    //         $data['msgs'] = $msgs; 
    //         $this->global['pageTitle'] = 'Request Page';
    //         $this->loadViews("cms/request_view", $this->global, $data , NULL);
    //     } else {

    //         redirect('cms/request_list');
    //     }
    // }

    // public function delRequest($rId = NULL)
    // {
    //     $status_array = array();
    //     $status = 0;
    //     $status_array = array(
    //     'request_status'=>$status,
    //     'date_updated'=>date('Y-m-d H:i:s')
    //     );

    //     $delReq = $this->traveler_model->delRequest($rId,$status_array);

    //     if (!empty($delReq)) {
    //         redirect('cms/request_list');
    //     } else {
    //         redirect('cms/request_list');
    //     }
    // }

    // public function listUsers()
    // {
    //     $usersL = $this->traveler_model->alltraveler();
    //     $userList = '';

    //     foreach($usersL as $r) 
    //     {
        
    //     $userList .= '<tr>';
    //     $userList .= '<td><a href="'.base_url().'cms/traveler/'.$r->id.'">'.$r->fname.'</a></td>';
    //     $userList .= '<td>'.$r->email.'</td>';
    //     $userList .= '<td>'.$r->phone.'</td>';
    //     $userList .= '<td><a href="'.base_url().'cms/traveler/'.$r->id.'">view</a></td>';
    //     $userList .= '</tr>';

    //     }



    //     $this->global['pageTitle'] = 'List of Travelers';
    //     $data['users'] = $userList;
    //     $this->loadViews("cms/userlist_view", $this->global, $data , NULL);
    // }

    // public function traveler($uId = NULL)
    // {
    //     if ($uId != NULL) {
            
    //         $user = $this->traveler_model->traveler($uId);
    //         $userreq = $this->traveler_model->reqByuser($uId);
    //         // create the user request list

    //         $travelcount = count($userreq);
    //         $userbody = '';

    //         foreach($userreq as $r) 
    //         {
            
    //             $userbody .= '<tr>';
    //             $userbody .= '<td><a href="'.base_url().'admin/request/'.$r->request_id.'">'.$r->destination.'</a></td>';
    //             $userbody .= '<td>'.$r->date_created.'</td>';
    //             $userbody .= '<td>'.$r->price_budget.'</td>';
    //             $userbody .= '<td><a href="'.base_url().'admin/request/'.$r->request_id.'">view</a></td>';
    //             $userbody .= '</tr>';

    //         }
    //         $this->global['pageTitle'] = 'Traveler Information';
    //         $data['user'] = $user;
    //         $data['requests'] = $userbody;
    //         $data['travelcount'] = $travelcount; 
    //         $this->loadViews("admin/traveler_view", $this->global, $data , NULL);

    //     } else { redirect('admin/travelers'); }
    // }

    // public function sentMsg()
    // {
    //     $this->load->library('form_validation');
    //     $form_data = $this->input->post();

    //     $msg = $this->input->post('chatmsg');
    //     $tripID = $this->input->post('tripID');
    //     // msg array
    //     $msg_array = array(
    //         'request_id'=>$tripID,
    //         'msg_txt'=>$msg,
    //         'is_admin'=>1,
    //         'date_created'=>date('Y-m-d H:i:s')
    //     );

    //     $result = $this->traveler_model->saveMsg($msg_array);

    
    //     if($result > 0)
    //         {
    //             $this->session->set_flashdata('msg', 'Message saved successfully will contact you soon :)');
    //             redirect('/admin/request/'.$tripID.'');
    //         }
    //         else
    //         {
    //             $this->session->set_flashdata('msg', 'Message not saved something is wrong');
    //             redirect('/admin/request/'.$tripID.'');
    //         }
    // }

    // function uploadDoc()
    // {
    //     $this->load->library('upload');

    //     $files = $_FILES;
    //     $cpt = count($_FILES['userfile']['name']);
    //     for($i=0; $i<$cpt; $i++)
    //     {           
    //         $_FILES['userfile']['name']= $files['userfile']['name'][$i];
    //         $_FILES['userfile']['type']= $files['userfile']['type'][$i];
    //         $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
    //         $_FILES['userfile']['error']= $files['userfile']['error'][$i];
    //         $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

    //         $this->upload->initialize($this->set_upload_options());
    //         $this->upload->do_upload();
    //     }
    // }

    // private function set_upload_options()
    // {   
    //     //upload an image options
    //     $config = array();
    //     $config['upload_path'] = '.upload/docs/';
    //     $config['allowed_types'] = 'gif|jpg|png';
    //     $config['max_size']      = '0';
    //     $config['overwrite']     = FALSE;

    //     return $config;
    // }

}

?>