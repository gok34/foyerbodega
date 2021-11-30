<?php

namespace App\Controllers;

use App\Libraries\Codigo;

use Jawira\CaseConverter\Convert;

class Home11 extends BaseController
{
    public function index()
    {
        $ints = new Codigo();
        echo $ints->soyhola();
        return view('welcome_message');
    }

    public function test1()
    {


        $hero = new Convert('john-connor');
        $datos['llave1'] = $hero->toSnake();
        return view('test1', $datos);
    }


    public function test2()
    {

        // helper('form', 'url', 'validate');
        return view('Signup', [
            'validation' => $this->validator
        ]);
    }

    public function test3()
    {
        //helper('form', 'url', 'validate');
        //  $validation = \Config\Services::validation();
        $validation = $this->validate([

            'username' => 'required|alpha_space',
            'email' => 'required|valid_emails',

        ]);

        if (!$validation) {
            echo view('Signup', [
                'validation' => $this->validator
            ]);
        } else {
            return view('Success');
        }
    }
}
