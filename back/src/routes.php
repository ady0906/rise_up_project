<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/users', function($id = null) use ($userResource) {
    return $userResource->get(null);
});

$app->get('/users/{id}', function($request, $response, $args) use ($userResource) {
    return $userResource->get($args['id']);
});

$app->post('/users', function($request, $response, $args) use ($userResource) {
    $data = array(
        'firstname' => $request->getParam('firstname'),
        'lastname' => $request->getParam('lastname'),
        'email' => $request->getParam('email'),
        'country' => $request->getParam('country')
    );
    return $userResource->post($data);
});

$app->put('/users/{id}', function($request, $response, $args) use ($userResource) {
    $data = array(
        'firstname' => $request->getParam('firstname'),
        'lastname' => $request->getParam('lastname'),
        'email' => $request->getParam('email'),
        'country' => $request->getParam('country')
    );
    return $userResource->put($args['id'], $data);
});

$app->delete('/users/{id}', function($request, $response, $args) use ($userResource) {
    return $userResource->delete($args['id']);
});
