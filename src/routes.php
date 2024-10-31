<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/feira', 'FeiraController@index');

$router->get('/hub', 'FeiraController@hub');

$router->get('/hulls-legacy', 'FeiraController@hulls');
$router->get('/panela-de-impressao', 'FeiraController@panela');
$router->get('/apparatus', 'FeiraController@apparatus');
$router->get('/berners', 'FeiraController@berners');
$router->get('/tinkerguide', 'FeiraController@tinkerguide');

$router->get('/admin', 'AdminController@index');

$router->get('/login-admin', 'AdminloginController@signin');
$router->post('/login-admin', 'AdminloginController@loginAction');

$router->get('/admin/aceitar/{idphoto}', 'AdminController@accept');
$router->get('/admin/recusar/{idphoto}', 'AdminController@reject');


$router->get('/pegar-cursos', 'HomeController@pegarCursos');

$router->get('/turma/{idturma}', 'TurmaController@index');

$router->get('/foto/{idphoto}', 'PhotoController@index');

$router->get('/nova-foto', 'PhotoController@newPhoto');
$router->post('/nova-foto', 'PhotoController@newPhotoAction');
$router->get('/pegar-cursos-foto', 'PhotoController@pegarCursos');

$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');