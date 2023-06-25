<?php

namespace App\Controllers;

class Download extends BaseController
{
    public function index()
    {
        // Get the latest framework releases
        try {
            $data = [
                'v3name' => '<em>unknown</em>',
                'v4name' => '<em>unknown</em>',
                'v3link' => 'https://github.com/AmirHosseinMoloudi/AHM_CMS/releases',
                'v4link' => 'https://github.com/AmirHosseinMoloudi/AHM_CMS/releases',
            ];
        } catch (ExceptionInterface $e) {
            $data = [
                'v3name' => '<em>unknown</em>',
                'v4name' => '<em>unknown</em>',
                'v3link' => 'https://github.com/AmirHosseinMoloudi/AHM_CMS/releases',
                'v4link' => 'https://github.com/AmirHosseinMoloudi/AHM_CMS/releases',
            ];
        }

        echo $this->render('download', $data);
    }
}
