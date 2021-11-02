<?php 
//dan vao controller
$router['default_controller'] = 'home';

$router['trang-chu'] = 'home';
$router['tin-tuc/(.+)'] = 'news/category/$1';


?>