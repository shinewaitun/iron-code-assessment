<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $json = file_get_contents(APPPATH . 'Data/data.json');
        $data['data'] = json_decode($json, true);

        return view('home', $data);
    }
}
