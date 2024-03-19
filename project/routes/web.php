<?php

namespace App\routes;

use App\Modules\Http\Controller\ArticleController;
use App\Modules\Http\Controller\PdfController;
use App\Modules\Http\Controller\PublicController;
use App\Modules\Router\Route;

$route = new Route;

$route::get('/', function () {
    return view('welcome');
});

$route::get('/pdf/make', [PdfController::class, 'printPdf']);

return $route;
