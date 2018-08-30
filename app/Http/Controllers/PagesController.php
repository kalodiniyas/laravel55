<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Menu\Menu; //usando a classe Menu de Spatie/Menu
use Spatie\Menu\Link; //usando a classe Link de Spatie/Menu
class PagesController extends Controller
{

    public function index() {

$menu = Menu::new()  //criando um novo menu
    ->add(Link::to('/', 'Home')) //definindo um link para a página inicial
    ->add(Link::to('/about', 'Sobre')) //definindo um link para a página Sobre
    ->add(Link::to('/contact', 'Contato')) //definindo um link para a página Contato
    ->add(Link::to('http://test.html','Fernanda Bernardo')) //definindo um link para o The Velopers com a Fernanda Bernardo
    ->add(Link::to('http://bit.ly','Bob')) //definindo um link para o The Velopers com o Bob
    ->render(); //renderizando o menu

// /print($menu); //exibindo o menu
    	return view('pages.index')->with('menu', $menu);
    }
    public function home() {
    	return view('welcome');
    }
}
