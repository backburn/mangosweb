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


// Accounts
Breadcrumbs::register('accounts.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Accounts', route('accounts.index'));
});

// Accounts > Create Account
Breadcrumbs::register('accounts.create', function($breadcrumbs)
{
    $breadcrumbs->parent('accounts.index');
    $breadcrumbs->push('Create Account', route('accounts.create'));
});

// Accounts > [id]
Breadcrumbs::register('accounts.show', function($breadcrumbs, $account)
{
    $breadcrumbs->parent('accounts.index');
    $breadcrumbs->push($account->title, route('accounts.show', $account->id));
});

// Accounts > [id] > Edit Account
Breadcrumbs::register('accounts.edit', function($breadcrumbs, $account)
{
    $breadcrumbs->parent('accounts.show', $account);
    $breadcrumbs->push('Edit Account', route('accounts.edit', $account->id));
});




// Home > Login
Breadcrumbs::register('login', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Login', route('login'));
});

// Home > Register
Breadcrumbs::register('register', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Register', route('register'));
});

// Home > Password > Reset
Breadcrumbs::register('password.reset', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Register', route('register'));
    $breadcrumbs->push('Reset', route('register'));
});