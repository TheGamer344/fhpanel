Route::group(['prefix' => 'extensions/slate'], function () {
    Route::get('/', [Admin\Extensions\slate\slateExtensionController::class, 'index'])->name('admin.extensions.slate.index');
    Route::patch('/', [Admin\Extensions\slate\slateExtensionController::class, 'update'])->name('admin.extensions.slate.patch');
    Route::post('/', [Admin\Extensions\slate\slateExtensionController::class, 'post'])->name('admin.extensions.slate.post');
    Route::put('/', [Admin\Extensions\slate\slateExtensionController::class, 'put'])->name('admin.extensions.slate.put');
    Route::delete('/{target}/{id}', [Admin\Extensions\slate\slateExtensionController::class, 'delete'])->name('admin.extensions.slate.delete');
});