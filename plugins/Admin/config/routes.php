<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::extensions('json', 'xml');

Router::plugin(
    'Admin',
    ['path' => '/admin'],
    function (RouteBuilder $routes) {

        $routes->connect('/', ['controller' => 'Admin', 'action' => 'index']);


        $routes->connect('/shifts/', ['controller' => 'Shifts','action' => 'index']);
        $routes->connect('/shifts/add', ['controller' => 'Shifts', 'action' => 'add']);
        $routes->connect('/shifts/start', ['controller' => 'Shifts', 'action' => 'start']);
        $routes->connect('/shifts/finish', ['controller' => 'Shifts', 'action' => 'finish']);
        $routes->connect('/shifts/add/:id', ['controller' => 'Shifts', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/shifts/view/:id', ['controller' => 'Shifts', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/shifts/edit/:id', ['controller' => 'Shifts', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/shifts/delete/:id', ['controller' => 'Shifts', 'action' => 'delete'], ['pass' => ['id']]);



        $routes->connect('/categories/', ['controller' => 'Categories', 'action' => 'index']);
        $routes->connect('/categories/add', ['controller' => 'Categories', 'action' => 'add']);
        $routes->connect('/categories/add/:id', ['controller' => 'Categories', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/categories/view/:id', ['controller' => 'Categories', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/categories/edit/:id', ['controller' => 'Categories', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/categories/delete/:id', ['controller' => 'Categories', 'action' => 'delete'], ['pass' => ['id']]);
        $routes->connect('/categories/search', ['controller' => 'Categories', 'action' => 'search']);

        $routes->connect('/typecategories/', ['controller' => 'Typecategories', 'action' => 'index']);
        $routes->connect('/typecategories/add', ['controller' => 'Typecategories', 'action' => 'add']);
        $routes->connect('/typecategories/add/:id', ['controller' => 'Typecategories', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/typecategories/view/:id', ['controller' => 'Typecategories', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/typecategories/edit/:id', ['controller' => 'Typecategories', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/typecategories/delete/:id', ['controller' => 'Typecategories', 'action' => 'delete'], ['pass' => ['id']]);




        $routes->connect('/products/', ['controller' => 'Products', 'action' => 'index']);
        $routes->connect('/products/add', ['controller' => 'Products', 'action' => 'add']);
        $routes->connect('/products/search', ['controller' => 'Products', 'action' => 'search']);
        $routes->connect('/products/test', ['controller' => 'Products', 'action' => 'test']);


        $routes->connect('/products/add/:id', ['controller' => 'Products', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/products/view/:id', ['controller' => 'Products', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/products/edit/:id', ['controller' => 'Products', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/products/delete/:id', ['controller' => 'Products', 'action' => 'delete'], ['pass' => ['id']]);


        $routes->connect('/users/', ['controller' => 'Users','action' => 'index']);
        $routes->connect('/users/add', ['controller' => 'Users', 'action' => 'add']);
        $routes->connect('/users/add/:id', ['controller' => 'Users', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/users/view/:id', ['controller' => 'Users', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/users/edit/:id', ['controller' => 'Users', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/users/delete/:id', ['controller' => 'Users', 'action' => 'delete'], ['pass' => ['id']]);





        $routes->connect('/teams/', ['controller' => 'Teams','action' => 'index']);
        $routes->connect('/teams/add', ['controller' => 'Teams', 'action' => 'add']);
        $routes->connect('/teams/add/:id', ['controller' => 'Teams', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/teams/view/:id', ['controller' => 'Teams', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/teams/edit/:id', ['controller' => 'Teams', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/teams/delete/:id', ['controller' => 'Teams', 'action' => 'delete'], ['pass' => ['id']]);



        $routes->connect('/teamsusers/:id', ['controller' => 'TeamsUsers','action' => 'index'], ['pass' => ['id']]);
        $routes->connect('/teamsusers/search', ['controller' => 'TeamsUsers','action' => 'search'], ['pass' => ['id']]);
        $routes->connect('/teamsusers/invite', ['controller' => 'TeamsUsers','action' => 'invite'], ['pass' => ['id']]);;
        $routes->connect('/teamsusers/:id/add/', ['controller' => 'TeamsUsers', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/teamsusers/view/:id', ['controller' => 'TeamsUsers', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/teamsusers/edit/:id', ['controller' => 'TeamsUsers', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/teamsusers/delete/:id', ['controller' => 'TeamsUsers', 'action' => 'delete'], ['pass' => ['id']]);
        $routes->connect('/teamsusers/decline/:id', ['controller' => 'TeamsUsers', 'action' => 'decline'], ['pass' => ['id']]);
        $routes->connect('/teamsusers/accept/:id', ['controller' => 'TeamsUsers', 'action' => 'accept'], ['pass' => ['id']]);




        $routes->connect('/tags/', ['controller' => 'Tags', 'action' => 'index']);
        $routes->connect('/tags/add', ['controller' => 'Tags', 'action' => 'add']);
        $routes->connect('/tags/add/:id', ['controller' => 'Tags', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/tags/view/:id', ['controller' => 'Tags', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/tags/edit/:id', ['controller' => 'Tags', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/tags/delete/:id', ['controller' => 'Tags', 'action' => 'delete'], ['pass' => ['id']]);


    }
);
