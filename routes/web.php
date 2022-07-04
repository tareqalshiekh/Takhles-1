<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\FileUpload;
use App\Models\Shipment;
use Dompdf\Adapter\PDFLib;

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard.dash');

Route::get('dashboard1', function () {
    return view('dashboard');
})->name('dashboard.dash');
 
Route::get('ship', function () {
    return view('ship');
});
Route::get('/upload-file', [FileUpload::class, 'createForm']);
Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');


Route::get('dropzone', [DropzoneController::class, 'index'])->name('dropzone.index');;

Route::post('dropzone/upload', [DropzoneController::class, 'upload'])->name('dropzone.upload');

// Route::post('dropzone/note', [DropzoneController::class, 'note'])->name('dropzone.note');

Route::get('dropzone/fetch', [DropzoneController::class, 'fetch'])->name('dropzone.fetch');

Route::get('dropzone/delete', [DropzoneController::class, 'delete'])->name('dropzone.delete');


Route::resource('shipments', ShipmentController::class);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {

// });


Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::resource('shipments', ShipmentController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])/* ->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}) */;



Route::get(
    'get-shipment-image',
    function () {
        return Shipment::find(1)->shipment_image;
    }
);
