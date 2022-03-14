<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', DashboardController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';


Route::get('/jsontest', function () {
    return '{"SensorType": "HPD2",
        "MessageType": "HPD2",
        "AppVersion": "3.3.19b3",
        "ModelName": "v3-rb22-xr",
        "IrLedOn": 0,
        "DetectedPersons": 1,
        "PersonPresence": 0,
        "DetectedPersonsZone": [
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0
        ],
        "PersonPresenceZone": [
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0
        ],
        "DetectionZonesPresent": 0,
        "GlobalIlluminanceLux": 289,
        "LuxZone": [
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0,
        0
        ],
        "GlobalLightValue": 49,
        "Temperature": "24.3",
        "Humidity": "24.1",
        "MqttConnected": 0,
        "final": "OK"}';
});
