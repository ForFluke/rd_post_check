<?php

$container = $app->getContainer();

//Container untuk View
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig( __DIR__ . '/../resources/views', [
        'cache' => false
    ]);
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

    // $app->post("/", function ($storeUrl) use ($router) {
    //     $data_member = json_decode(file_get_contents('../resources/json_data/member_data.json'), true);
    //     if($_POST['username'] == $data_member['username'] && $_POST['password'] ==  $data_member['password'] ){
    //             $data = array('username' => $_POST['username'], 'password' => $_POST['password'] ,'status' => 'correct' );
    //             echo json_encode($data);   
    //             $_SESSION['username'] = $_POST['username'];
    //     }else{
    //             $data = array('username' => $_POST['username'], 'password' => $_POST['password'] ,'status' => 'not correct');
    //             echo json_encode($data);
    //     }
    // });



$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

//Container untuk database
$container['db'] = function ($container) use ($capsule){
    return $capsule;
};
