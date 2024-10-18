Route::group(['prefix' => 'extensions/nebula'], function () {
    Route::get('/', [Admin\Extensions\nebula\nebulaExtensionController::class, 'index'])->name('admin.extensions.nebula.index');
    Route::patch('/', [Admin\Extensions\nebula\nebulaExtensionController::class, 'update'])->name('admin.extensions.nebula.patch');
    Route::post('/', [Admin\Extensions\nebula\nebulaExtensionController::class, 'post'])->name('admin.extensions.nebula.post');
    Route::put('/', [Admin\Extensions\nebula\nebulaExtensionController::class, 'put'])->name('admin.extensions.nebula.put');
    Route::delete('/{target}/{id}', [Admin\Extensions\nebula\nebulaExtensionController::class, 'delete'])->name('admin.extensions.nebula.delete');
});