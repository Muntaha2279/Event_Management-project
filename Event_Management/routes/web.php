<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\ParticipantController;
use App\Http\Middleware\Authenticate;

Route::withoutMiddleware([Authenticate::class])->group(function () {
    Route::get('/', function () { return view('login'); });

    Route::get('/register', [UserController::class, 'create']);

    Route::post('/createuser', [UserController::class, 'createuser']);

    Route::post('/login', [UserController::class, 'login']);
});

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');});

    Route::get('/logout', [UserController::class, 'logout']);

    Route::get('/all-events', [EventController::class, 'listallevents']);

    Route::get('/ongoing-events', [EventController::class, 'listongoingevents']);

    Route::get('/upcoming-events', [EventController::class, 'listupcomingevents']);

    Route::get('/create-event', [EventController::class, 'create']);

    Route::post('/create-event', [EventController::class, 'addevent']);

    Route::get('/update-event/{id}', [EventController::class, 'update']);

    Route::post('/update-event', [EventController::class, 'updateevent']);

    Route::get('/delete-event/{id}', [EventController::class, 'delete']);

    Route::get('/all-tasks', [TaskController::class, 'listalltasks']);

    Route::get('/pending-tasks', [TaskController::class, 'listpendingtasks']);

    Route::get('/create-task', [TaskController::class, 'create']);

    Route::post('/create-task', [TaskController::class, 'addtask']);

    Route::get('/update-task/{id}', [TaskController::class, 'update']);

    Route::post('/update-task', [TaskController::class, 'updatetask']);

    //Route::get('/update-status/{id}', [TaskController::class, 'updatestatus']);

    Route::get('/delete-task/{id}', [TaskController::class, 'delete']);

    Route::get('/checklist', [ChecklistController::class, 'allchecklist']);

    //Route::get('/create-checklist', [ChecklistController::class, 'create']);

    //Route::post('/create-checklist', [ChecklistController::class, 'createchecklist']);

    //Route::get('/update-checklist/{id}', [ChecklistController::class, 'update']);

    //Route::post('/update-checklist', [ChecklistController::class, 'updatechecklist']);

    Route::get('/update-checklist-status/{id}', [ChecklistController::class, 'updatestatus']);

    //Route::get('/delete-checklist/{id}', [ChecklistController::class, 'delete']);

    Route::get('/participants', [ParticipantController::class, 'allparticipant']);

    //Route::get('/add-participant', [ParticipantController::class, 'create']);

    //Route::post('/add-participant', [ParticipantController::class, 'createparticipant']);

    //Route::get('/update-participant/{id}', [ParticipantController::class, 'update']);

    //Route::post('/update-participant', [ParticipantController::class, 'updateparticipant']);

    //Route::get('/delete-participant/{id}', [ParticipantController::class, 'delete']);
});





