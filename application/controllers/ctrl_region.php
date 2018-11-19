<?php

class ctrl_region extends CI_Controller 
{
    
    public function index()
    {
        $this->load->view('view_login');
    }

    public function seConnecter()
    {
        $login = $_GET['LogIn'];
        $this->load->model("model_login");
        $this->load->view("view_region");
    }

    public function GetAllRegion()
    {
        $this->load->model("model_region");
        $data['lesRegions'] = $this->region->Connecter($data['lesRegions']);

        $this->load->view("view_region, $data");
    }

}

?>