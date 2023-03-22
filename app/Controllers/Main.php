<?php

namespace App\Controllers;
 

class Main extends BaseController
{
    public function index()
    {
        /** 
         * Set the name of view file contains in \Views\layout\
         * 
        */
        $data["view"] = "starAdmin2_overview";

        $parser = \Config\Services::parser();

        /** 
         * set the params of data to parse in content to render from view  
         * 
        */
        $data["parse"] = array(
            'title'    => \Config\App::SITE_TITLE,
            'heading'  => \Config\App::SITE_HEADING,
            'owner'    => 'Aysad Kozanoglu',
            'ver'      => \CodeIgniter\CodeIgniter::CI_VERSION,
            'url'      => base_url(),
            'env'      => \CodeIgniter\CodeIgniter::ENVIRONMENT,
            'dateyear' => date('Y')

        );

        $data["parsedContentView"] = $parser->setData($data["parse"])
                                    ->render(\Config\App::DEFAULTTPL.'/'.$data["view"]);
        
        echo view('template', $data);    
    }

    public function examples($method_param = false)
    {
        /** 
         * Set the name of view file contains in \Views\layout\
         * 
        */

        $data["view"] = "starAdmin2_".$method_param;

        $parser = \Config\Services::parser();

        /** 
         * set the params of data to parse in content to render from view  
         * 
        */
        $data["parse"] = array(
            'title'    => \Config\App::SITE_TITLE,
            'heading'  => \Config\App::SITE_HEADING,
            'owner'    => 'Aysad Kozanoglu',
            'ver'      => \CodeIgniter\CodeIgniter::CI_VERSION,
            'url'      => base_url(),
            'env'      => \CodeIgniter\CodeIgniter::ENVIRONMENT,
            'dateyear' => date('Y')

        );

        $data["parsedContentView"] = $parser->setData($data["parse"])
                                    ->render(\Config\App::DEFAULTTPL.'/'.$data["view"]);
        
        echo view('template', $data);    
    }
}
