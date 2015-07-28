<?php
class Pages extends CI_Controller {

        public function index($page = 'home')
{
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/body', $data);
        $this->load->view('templates/footer', $data);
}       

        public function about(){

        $this->load->view('templates/header');
        $this->load->view('templates/about');
        $this->load->view('templates/footer');
        }
        
        public function contact(){

        $this->load->view('templates/header');
        $this->load->view('templates/contact');
        $this->load->view('templates/footer');
        }
        
        public function services(){

        $this->load->view('templates/header');
        $this->load->view('templates/services');
        $this->load->view('templates/footer');
        }
        
        public function projects(){
                
        $this->load->view('templates/header');
        $this->load->view('templates/projects');
        $this->load->view('templates/footer');
        }
        
        public function space(){
        $this->load->view('templates/header');
        $this->load->view('templates/space');
        $this->load->view('templates/footer');
        }
        
        public function penny(){
        $this->load->view('templates/header');
        $this->load->view('templates/penny');
        $this->load->view('templates/footer');
        }
        
        public function overload(){
        $this->load->view('templates/header');
        $this->load->view('templates/overload');
        $this->load->view('templates/footer');
        }
}