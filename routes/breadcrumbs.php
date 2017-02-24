<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Inicio', route('/'));
});

// Home > Empresa
Breadcrumbs::register('empresa', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Empresa > Registro de empresas', route('empresa/create'));
});
