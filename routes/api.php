use App\Http\Controllers\BarcodeController;

Route::post('/scan-barcode', [BarcodeController::class, 'scan']);
