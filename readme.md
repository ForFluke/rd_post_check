# What is this
Slim with MVC structure like Laravel. Using Twig as template and Eloquent as Database Model.

# Install
donwload project <br>
composer install

# Setting
in bootstrap/app.php set your own database configuration
## ex
 $app->get('/main_page[/{main_page}]

         // $parsedBody = json_decode($input, true);
        //เอา พารามิเตอร์ทั้งหมด มาแสดง

        // $params1 =  $request->getParams();
        // print_r($params1);

        // #เอาเฉพาะคีย์ โดยจะระบุ ชื่อ key ไป และจะไม่เติม s 
        // $tttt =  $request->getParam("tttt");
        // echo $tttt;

        // #เอาเฉพาะตัวที่ส่งเป็น body 
        // $body =  $request->getBody();
        // $params2 = json_decode($body, true);
        // print_r($params2);

        // #เอาเฉพาะตัวที่ส่งเป็น Header ถ้าต้องการทั้งหมดให้เติม s ถ้าต้องการจะเฉพาะให้ใส่ชื่อ และไม่เติม s  
        // $headers = $request->getHeaders();
        // print_r($headers);