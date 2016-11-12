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

// Home > Realms
Breadcrumbs::register('realms', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Realms', route('realms'));
});

// Home > Characters
Breadcrumbs::register('characters', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Characters', route('characters'));
});

// Home > Accounts
Breadcrumbs::register('accounts', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Accounts', route('accounts'));
});

// Home > Accounts > [id]
Breadcrumbs::register('id', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('accounts');
    $breadcrumbs->push($id->title, route('accounts', $id->id));
});
