<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use QCloud_WeApp_SDK\Mysql\Mysql as DB;

class Demo extends CI_Controller {
    public function index() {

        $table = data.table;
        $result = DB::select($table,'[*]');
        
        $this->json([
            'code' => 0,
            'data' => [
                'msg' => 'Hello World'
            
            ],
            'result' => $result
        ]);
    }
}