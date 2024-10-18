<?php

use Illuminate\Support\Facades\Route;
use Pterodactyl\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Blueprint Extensions
|--------------------------------------------------------------------------
|
| Endpoint: /admin/extensions
|
*/
Route::group(['prefix' => 'extensions'], function () {
  Route::get('/', [Admin\ExtensionsController::class, 'index'])->name('admin.extensions');
});
Route::group(['prefix' => 'extensions/blueprint'], function () {
  /* Blueprint admin page */
  Route::get('/', [Admin\Extensions\Blueprint\BlueprintExtensionController::class, 'index'])->name('admin.extensions.blueprint.index');
  Route::patch('/', [Admin\Extensions\Blueprint\BlueprintExtensionController::class, 'update']);

  /* Extension permissions endpoint */
  Route::patch('/config', [Pterodactyl\BlueprintFramework\Controllers\ExtensionConfigurationController::class, 'update']);
});// slate:start
Route::group(['prefix' => 'extensions/slate'], function () {
    Route::get('/', [Admin\Extensions\slate\slateExtensionController::class, 'index'])->name('admin.extensions.slate.index');
    Route::patch('/', [Admin\Extensions\slate\slateExtensionController::class, 'update'])->name('admin.extensions.slate.patch');
    Route::post('/', [Admin\Extensions\slate\slateExtensionController::class, 'post'])->name('admin.extensions.slate.post');
    Route::put('/', [Admin\Extensions\slate\slateExtensionController::class, 'put'])->name('admin.extensions.slate.put');
    Route::delete('/{target}/{id}', [Admin\Extensions\slate\slateExtensionController::class, 'delete'])->name('admin.extensions.slate.delete');
});
// slate:stop
// nebula:start
Route::group(['prefix' => 'extensions/nebula'], function () {
    Route::get('/', [Admin\Extensions\nebula\nebulaExtensionController::class, 'index'])->name('admin.extensions.nebula.index');
    Route::patch('/', [Admin\Extensions\nebula\nebulaExtensionController::class, 'update'])->name('admin.extensions.nebula.patch');
    Route::post('/', [Admin\Extensions\nebula\nebulaExtensionController::class, 'post'])->name('admin.extensions.nebula.post');
    Route::put('/', [Admin\Extensions\nebula\nebulaExtensionController::class, 'put'])->name('admin.extensions.nebula.put');
    Route::delete('/{target}/{id}', [Admin\Extensions\nebula\nebulaExtensionController::class, 'delete'])->name('admin.extensions.nebula.delete');
});
// nebula:stop
// versionchanger:start
Route::group(['prefix' => 'extensions/versionchanger'], function () {
    Route::get('/', [Admin\Extensions\versionchanger\versionchangerExtensionController::class, 'index'])->name('admin.extensions.versionchanger.index');
    Route::patch('/', [Admin\Extensions\versionchanger\versionchangerExtensionController::class, 'update'])->name('admin.extensions.versionchanger.patch');
    Route::post('/', [Admin\Extensions\versionchanger\versionchangerExtensionController::class, 'post'])->name('admin.extensions.versionchanger.post');
    Route::put('/', [Admin\Extensions\versionchanger\versionchangerExtensionController::class, 'put'])->name('admin.extensions.versionchanger.put');
    Route::delete('/{target}/{id}', [Admin\Extensions\versionchanger\versionchangerExtensionController::class, 'delete'])->name('admin.extensions.versionchanger.delete');
});
// versionchanger:stop
