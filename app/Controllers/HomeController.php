<?php
/*
 * HomeController only for controller sample
 * @hilmanrdn 18-01-2017
 */

namespace App\Controllers;



class HomeController extends BaseController
{
    public function index($request, $response,$args)
    {
        if(empty($args)){
            return $this->c->view->render($response, 'home.twig');
        }else{
            $data_member = json_decode(file_get_contents('../resources/json_data/member_data.json'), true);
            return $this->c->view->render($response, $args['main_page'].'.twig', [
                'user' => $data_member 
            ] );
        }
    }

    // public function index_page($request, $response, $args)
    // {
    //     $data_member = json_decode(file_get_contents('../resources/json_data/member_data.json'), true);
    //     return $this->c->view->render($response, $args['main_page'].'.twig', [
    //         'user' => $data_member 
    //     ] );
    // }

    public function check_login($request, $response)
    {
        $data_member = json_decode(file_get_contents('../resources/json_data/member_data.json'), true);
        $params =  $request->getParams();
        if($params['username'] == $data_member['username'] && $params['password'] ==  $data_member['password'] ){
                $data = array('username' => $params['username'], 'password' => $params['password'] ,'status' => 'correct' );
        }else{
                $data = array('username' => $params['username'], 'password' => $params['password'] ,'status' => 'not correct');
        }
        echo json_encode($data);   
    }

  
}
