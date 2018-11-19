<?php

class ctrl_region extends CI_Controller 
{
    
    public function index()
    {
        $this->load->view('view_login');
    }

    public function Connecter()
    {
        $this->load->model("model_login");
        $data['seConnecter'] = $this->model_login->Connecter($data['seConnecter']);
    }

}

?>