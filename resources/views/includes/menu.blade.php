<?php
use Spatie\Menu\Menu; //usando a classe Menu de Spatie/Menu
use Spatie\Menu\Link; //usando a classe Link de Spatie/Menu

$menu = Menu::new()  //criando um novo menu
    ->add(Link::to('/', 'Home')) //definindo um link para a página inicial
    ->add(Link::to('/about', 'Sobre')) //definindo um link para a página Sobre
    ->add(Link::to('/contact', 'Contato')) //definindo um link para a página Contato
    ->add(Link::to('http://bit.ly/thevelopers-fernandabernardo','Fernanda Bernardo')) //definindo um link para o The Velopers com a Fernanda Bernardo
    ->add(Link::to('http://bit.ly/thevelopers-bob','Bob')) //definindo um link para o The Velopers com o Bob
    ->submenu('More', Menu::new()
        ->addClass('submenu')
        ->add(Link::to('/contact1', 'Contato')) 
        ->add(Link::to('/contact2', 'Contato')) 
    )
    ->render(); //renderizando o menu

print($menu); //exibindo o menu