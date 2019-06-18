<?php
/*
 * Routing System
 * @hilmanrdn 18-01-2017
 */

$app->get('/[{main_page}]' , '\App\Controllers\HomeController:index');
// $app->get('/{main_page}', '\App\Controllers\HomeController:index_page');  

$app->post('/check_login/post','\App\Controllers\HomeController:check_login');

//$app->get('/xxx[/{yyy}]', '\App\Controllers\HomeController:index'); การที่ใส่ [] เพื่อระบุว่าในกรณีที่ไม่มีตัวแปรนั้น ก็ยังจะสามารถรันได้ เหมือนกับ การใช้ @ 

