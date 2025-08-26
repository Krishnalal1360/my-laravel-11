<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QueryBuilder\CreateController;

use App\Http\Controllers\QueryBuilder\InsertController;

use App\Http\Controllers\QueryBuilder\ReadController;

use App\Http\Controllers\QueryBuilder\UpdateController;

use App\Http\Controllers\QueryBuilder\DeleteController;

use App\Http\Controllers\QueryBuilder\SelectController;

use App\Http\Controllers\QueryBuilder\PluckController;

use App\Http\Controllers\QueryBuilder\AggregateController;

use App\Http\Controllers\EloquentORM\CreateController1;

use App\Http\Controllers\EloquentORM\ReadController1;

use App\Http\Controllers\EloquentORM\UpdateController1;

use App\Http\Controllers\EloquentORM\DeleteController1;

use App\Http\Controllers\EloquentORM\EmployeeCreate;

<<<<<<< HEAD
=======
use App\Http\Controllers\EloquentORM\ConditionalClauseController;

use App\Http\Controllers\EloquentORM\SoftDeleteController;

use App\Http\Controllers\EloquentORM\RestoreForceDeleteController;

>>>>>>> c643cb8 (Query Builder and Eloquent ORM)
Route::get('/', function () {
    return view('welcome');
});

//Query Builder Routes

Route::get('/query-builder-create', 
[CreateController::class, 'create'])->name('query-builder-create');

Route::get('/query-builder-create-view', function(){
    return view('QueryBuilder/CreateView');
})->name('query-builder-create-view');

Route::get('/query-builder-insert', 
[InsertController::class, 'insert'])->name('query-builder-insert');

Route::get('/query-builder-read',
[ReadController::class, 'readAll'])->name('query-builder-readAll');

Route::get('/query-builder-read/{email}', 
[ReadController::class, 'readEmail1']
)->name('query-builder-readEmail1');

Route::get('/query-builder-read', function(){
$email = 'joesph78@example.org';
return app(\App\Http\Controllers\QueryBuilder\ReadController::class)->readEmail2($email);
})->name('query-builder-readEmail2');

Route::get('/query-builder-update/{id}', 
[UpdateController::class, 'update']
)->name('query-builder-update');

Route::fallback(function(){
    return response() -> view('QueryBuilder/BadRequestView', [], 404);
});

Route::get('/query-builder-delete/{id}', 
[DeleteController::class, 'delete']
)->name('query-builder-delete');

Route::get('/query-builder-select',
[SelectController::class, 'select']
)->name('query-builder-select');

Route::get('/query-builder-pluck',
[PluckController::class, 'pluck']
)->name('query-builder-pluck');

Route::get('/query-builder-aggregate', AggregateController::class
)->name('query-builder-aggregate');

//Eloquent ORM routes

Route::get('/eloquent-orm-create', 
[CreateController1::class, 'create']
)->name('eloquent-orm-create');

Route::get('/eloquent-orm-readAll',
[ReadController1::class, 'readAll']
)->name('eloquent-orm-readAll');

Route::get('/eloquent-orm-readId/{id}', function($id){
    //
    return app(\App\Http\Controllers\EloquentORM\ReadController1::class)->readId($id);
})->name('eloquent-orm-readId');

Route::get('/eloquent-orm-update/{id}', function($id){
    //
    return app(\App\Http\Controllers\EloquentORM\UpdateController1::class)->update($id);
})->name('eloquent-orm-update');

Route::get('/eloquent-orm-delete/{id}', function($id){
    //
    return app(\App\Http\Controllers\EloquentORM\DeleteController1::class)->delete($id);
})->name('eloquent-orm-delete');

Route::get('/eloquent-orm-employee-create',
[EmployeeCreate::class, 'create']
)->name('eloquent-orm-employee-create');

Route::get('/eloquent-orm-employee-insert',
[EmployeeCreate::class, 'insert']
<<<<<<< HEAD
)->name('eloquent-orm-employee-insert');
=======
)->name('eloquent-orm-employee-insert');

Route::get('/eloquent-orm-conditional-clause/{id}',
  [ConditionalClauseController::class, 'conditionalClause1']
)->whereNumber('id');

Route::get('/eloquent-orm-conditional-clause/{id}/{price}',
  [ConditionalClauseController::class, 'conditionalClause2']
)->whereNumber('id')->whereNumber('price');

Route::get('/eloquent-orm-conditional-clause/{name}',
  [ConditionalClauseController::class, 'conditionalClause3']
)->whereAlpha('name');

Route::get('/eloquent-orm-conditional-clause',
  [ConditionalClauseController::class, 'queryScope']
);

Route::get('/eloquent-orm-soft-delete/{id}',
[SoftDeleteController::class, 'softDelete']
);

Route::get('/eloquent-orm-restore/{id}',
[RestoreForceDeleteController::class, 'restoreData']
);

Route::get('/eloquent-orm-force-delete/{id}',
[RestoreForceDeleteController::class, 'forceDeleteData']
);
>>>>>>> c643cb8 (Query Builder and Eloquent ORM)
