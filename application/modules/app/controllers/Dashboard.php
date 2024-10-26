<?php

class Dashboard extends MY_Controller
{



    function __construct()
    {
        parent::__construct();

        $this->view = 'app/dashboard/';
    }

    public function dashboard()
    {
        $this->load->view($this->view . 'index');
    }
}
