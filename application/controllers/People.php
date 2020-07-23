<?php 
    class People extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
             //load model dengan alias
            $this->load->model('People_model','people');
            $this->load->library('pagination');
            $this->load->library('form_validation');
        }

        public function index()
        { 
            $data['judul'] = 'List of Peoples';

            //ambil data keyword
            if($this->input->post('submit'))
            {
                $data['keyword'] = $this->input->post('keyword');
                $this->session->set_userdata('keyword',$data['keyword']);
            } else {
                $data['keyword'] = $this->session->userdata('keyword');
            }

            //config
            $this->db->like('name', $data['keyword']);
            $this->db->from('people');
            $config['total_rows'] = $this->db->count_all_results();
            $data['total_rows'] = $config['total_rows'];
            $config['per_page'] = 7;

            $this->pagination->initialize($config);

            $data['start'] = $this->uri->segment(3);
            $data['people'] = $this->people->getPeople($config['per_page'], $data['start'], $data['keyword']);
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer');
            $this->load->view('people/index',$data);
        }
        
        public function detail($id)
        {
            $data['judul'] = 'People Details';
            $data['people'] = $this->people->getPeopleById($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer');
            $this->load->view('people/detail',$data);
        }
        
        public function add()
        {   
            $data['judul'] = 'Add New People Form';
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('address','Address','required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('templates/header', $data);
                $this->load->view('templates/footer');
                $this->load->view('people/add',$data);
            }else{
                $this->people->addPeople();
                $this->session->set_flashdata('flash','added');
                redirect('people');
            }
        }

        public function edit($id)
        {   
            $data['judul'] = 'Edit Data People';
            $data['people'] = $this->people->getPeopleById($id);

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('address','Address','required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('templates/header', $data);
                $this->load->view('templates/footer');
                $this->load->view('people/edit',$data);
            }else{
                $this->people->editPeople();
                $this->session->set_flashdata('flash','changed');
                redirect('people');
            }
        }

        public function delete($id)
        {
            $this->people->deletePeople($id);
            $this->session->set_flashdata('flash','deleted');
            redirect('people');
        }

    }
    
?>