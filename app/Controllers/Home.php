<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Get the latest framework releases
        try {
            $data = [
                'html_url'         => 'https://github.com/codeigniter4/CodeIgniter4',
                'stargazers_count' => '',
                'forks_count'      => '',
            ];
        } catch (ExceptionInterface $e) {
            $data = [
                'html_url'         => 'https://github.com/codeigniter4/CodeIgniter4',
                'stargazers_count' => '',
                'forks_count'      => '',
            ];
        }

        echo $this->render('home', $data);
    }
}
