<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use App\Application\Actions\User\UpdateUserAction;
use App\Application\Actions\Jobdating\ListJobdatingsAction;
use App\Application\Actions\Jobdating\ViewJobdatingAction;
use App\Application\Actions\Jobdating\UpdateJobdatingAction;
use App\Application\Actions\Jobdating\DeleteJobdatingAction;
use App\Application\Actions\Jobdating\CreateJobdatingAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/Jobdatings', function (Group $group) {
        $group->get('', ListJobdatingsAction::class);
        $group->post('', CreateJobdatingAction::class);
        $group->get('/{id}', ViewJobdatingAction::class);
        $group->put('/{id}', UpdateJobdatingAction::class);
        $group->delete('/{id}', DeleteJobdatingAction::class);

        $group->post('/{id}/{listName}', function(){});
        // $group->post('/{id}/students', function(){});
        // $group->post('/{id}/pro', function(){});
        // $group->post('/{id}/date', function(){});

        $group->get('/{id}/{listName}/{listId}', function(){});
        $group->put('/{id}/{listName}/{listId}', function(){});
        $group->delete('/{id}/{listName}/{listId}', function(){});
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
        $group->put('/{id}', UpdateUserAction::class);
        // $group->put('/{id}', function(){});
    });
};

