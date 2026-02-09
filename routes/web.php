<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Configurations\ConfigurationsController;
use App\Http\Controllers\Students\StudentsController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::prefix('configurations')->group(function () {
        Route::get('/list', [ConfigurationsController::class, 'listConfigurations'])
            ->name('admin.configurations.list');

        Route::get('/list/{type}', [ConfigurationsController::class, 'showTable'])
            ->where('type', 'standard|medium|board|modeofpayment|typeofpayment')
            ->name('showlistbytype');

        Route::get('/list/pagination/{type}', [ConfigurationsController::class, 'showPagination'])
            ->where('type', 'standard|medium|board|modeofpayment|typeofpayment')
            ->name('showlistbypagination');

        Route::get('/add', [ConfigurationsController::class, 'index'])
            ->name('admin.configurations.index');

        Route::get('/{type}', [ConfigurationsController::class, 'loadPage'])
            ->where('type', 'standard|medium|board|modeofpayment|typeofpayment')
            ->name('admin.configurations.load');

        Route::post('/addcofigurations', [ConfigurationsController::class, 'addConfigurations'])
            ->name('addConfigurations');
    });

    Route::prefix('students')->group(function () {
        Route::get('/', [StudentsController::class, 'index'])
            ->name('admin.students.index');
        
        // Add form page
        Route::get('/list', [StudentsController::class, 'list'])
            ->name('admin.students.list');


        Route::post('/save', [StudentsController::class, 'save'])
        ->name('admin.students.save');

        // Edit form page
        Route::get('/edit/{id}', [StudentsController::class, 'edit'])->name('admin.students.edit');

        // Update student
        Route::put('/update/{id}', [StudentsController::class, 'update'])->name('admin.students.update');

        // Delete student (optional)
        Route::delete('/delete/{id}', [StudentsController::class, 'delete'])->name('admin.students.delete');

    });
    
});
