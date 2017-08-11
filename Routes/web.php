<?php

event('team.routing', app('router'));
$namespacePrefix = '\\'.'Tyondo\\Team\\Http\\Controllers'.'\\';
//-----Back-end ----------//


Route::resource('team', $namespacePrefix.'TeamController', [
    'names'=> [
        'index' => 'tyondo.team.index',
        'create' => 'tyondo.team.create',
        'store' => 'tyondo.team.store',
        'update' => 'tyondo.team.update',
        'destroy' => 'tyondo.team.destroy',
        'show' => 'tyondo.team.show',
        'edit' => 'tyondo.team.edit',
    ]
]);