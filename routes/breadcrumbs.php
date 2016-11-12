<?php
/**
 * Created by PhpStorm.
 * User: backb
 * Date: 11/12/2016
 * Time: 2:00 PM
 */

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Home > Blog
Breadcrumbs::register('accounts', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::register('id', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('accounts');
    $breadcrumbs->push($id->title, route('accounts', $id->id));
});
