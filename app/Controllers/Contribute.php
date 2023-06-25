<?php

namespace App\Controllers;

class Contribute extends BaseController
{
    public function index()
    {
        try {
            $data['contributors'] = [];

        } catch (ExceptionInterface $e) {
            $data['contributors'] = null;
        }

        echo $this->render('contribute', $data);
    }
}
