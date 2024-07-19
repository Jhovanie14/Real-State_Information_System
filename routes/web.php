<?php

use App\Http\Controllers\AgentsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrokersController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\HdmfLoanController;
use App\Http\Controllers\HdmfLoanPropertyController;
use App\Http\Controllers\InHouseController;
use App\Http\Controllers\InHousePropertyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ReservationsController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

// QUICK REGISTER
Route::any('/registerapol', [AuthController::class, 'register_apol']);
Route::any('/registerclient', [AuthController::class, 'register_client']);

// Route::get('/', [AuthController::class, 'login'])->name('login');
// Route::post('/authenticate', [AuthController::class, 'authenticate']);
// Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/', 'LoginController@login');
Route::post('/logout', 'LoginController@logout');
Route::post('/validate', 'LoginController@validateUser');

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::group(['prefix' => 'home'], function () {
        Route::get('main', 'MainController@home');
    });
});
// Route::get('/home/main', 'MainController@home')->middleware('auth');

Route::group(['prefix' => 'update'], function () {
    Route::get('main', 'UpdateController@main');
    Route::get('delete/{ver_id}', 'UpdateController@delete');
    Route::post('save', 'UpdateController@save');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('main', 'UserController@main');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('delete/{nws_id}', 'NewsController@delete');
    Route::post('save', 'NewsController@save');
});

Route::group(['prefix' => 'chat'], function () {
    Route::post('send', 'ChatController@send');
    Route::get('delete/{cht_id}', 'ChatController@delete');
});
Route::get('chat/body', 'ChatController@chatRefresh')->name('chat');

Route::group(['prefix' => 'calendar'], function () {
    Route::get('main', 'EventController@main');
    Route::post('save', 'EventController@save');
    Route::get('details/{evt_uuid}', 'EventController@details');
    Route::get('delete/{evt_uuid}', 'EventController@delete');
});

Route::group(['prefix' => 'download'], function () {
    Route::get('main', 'DownloadController@main');
    Route::post('save', 'DownloadController@save');
    Route::get('get/{fle_file}', 'DownloadController@download');
    Route::get('remove/{fle_uuid}', 'DownloadController@remove');
});

Route::group(['prefix' => 'messages'], function () {
    Route::get('inbox', 'MessageController@main');
    Route::get('sent', 'MessageController@sent');
    Route::get('compose/new', 'MessageController@compose');
    // Route::get('compose/set/{usrID}', 'MessageController@composeSet');
    Route::post('sendMultiple', 'MessageController@sendMultiple');
    Route::post('sendSingle', 'MessageController@sendSingle');
    Route::get('read/{msg_uuid}', 'MessageController@read');
    Route::get('readSent/{msg_uuid}', 'MessageController@readSent');
    Route::get('reply/{msg_uuid}', 'MessageController@reply');
    Route::get('forward/{msg_uuid}', 'MessageController@forward');
    Route::get('delete/to/{msg_uuid}', 'MessageController@deleteTo');
    Route::get('delete/from/{msg_uuid}', 'MessageController@deleteFrom');
});



Route::group(['middleware' => ['AuthCheck']], function () {
    // Clients Controller
    Route::group(['prefix' => 'clients'], function () {
        Route::get('/', [ClientsController::class, 'index']);
        Route::get('/create', [ClientsController::class, 'create']);
        Route::get('/active', [ClientsController::class, 'active']);
        Route::get('/archived', [ClientsController::class, 'archived']);
        Route::get('/deleted', [ClientsController::class, 'deleted']);
        Route::get('/{id}', [ClientsController::class, 'showClient']);
        Route::get('/{client}/print', [ClientsController::class, 'print']);

        Route::post('/', [ClientsController::class, 'addClient']);
        Route::patch('/{client}', [ClientsController::class, 'updateClient']);
        Route::patch('/{client}/image/upload', [ClientsController::class, 'updateClientImage']);
        Route::patch('/{client}/delete', [ClientsController::class, 'deleteClient']);
        Route::patch('/{client}/archive', [ClientsController::class, 'archiveClient']);
        Route::patch('/{client}/activate', [ClientsController::class, 'activateClient']);

        Route::post('/spouse/{client}', [ClientsController::class, 'addSpouse']);
        Route::patch('/spouse/{spouse}/edit', [ClientsController::class, 'updateSpouse']);
        Route::patch('/spouse/{spouse}/image/upload', [ClientsController::class, 'updateSpouseImage']);
        Route::patch('/spouse/{spouse}/delete', [ClientsController::class, 'deleteSpouse']);

        Route::post('/employment/{client}', [ClientsController::class, 'addEmployment']);
        Route::patch('/employment/{employment}/edit', [ClientsController::class, 'updateEmployment']);
        Route::patch('/employment/{employment}/delete', [ClientsController::class, 'deleteEmployment']);

        Route::post('/selfEmployment/{client}', [ClientsController::class, 'addSelfEmployment']);
        Route::patch('/selfEmployment/{selfEmployment}/edit', [ClientsController::class, 'updateSelfEmployment']);
        Route::patch('/selfEmployment/{selfEmployment}/delete', [ClientsController::class, 'deleteSelfEmployment']);

        Route::post('/dependent/{client}', [ClientsController::class, 'addDependent']);
        Route::patch('/dependent/{dependent}/edit', [ClientsController::class, 'updateDependent']);
        Route::patch('/dependent/{dependent}/delete', [ClientsController::class, 'deleteDependent']);

        Route::post('/nrcr/{client}', [ClientsController::class, 'addNRCR']);
        Route::patch('/nrcr/{nonRelativeCharacterReference}/edit', [ClientsController::class, 'updateNRCR']);
        Route::patch('/nrcr/{nonRelativeCharacterReference}/delete', [ClientsController::class, 'deleteNRCR']);
    });

    // IN HOUSE CONTROLLER
    // Route::group(['prefix' => 'in-house'], function () {
    //     // Route::get('/', [ReservationsController::class, 'index']);

    //     Route::get('/', [InHouseController::class, 'index']);
    //     // Route::get('/create', [ReservationsController::class, 'create']);
    //     Route::get('/create/in-house', [InHouseController::class, 'create']);

    //     Route::get('/{reservation}/print', [ReservationsController::class, 'print']);
        
        
    //     Route::get('/in-house/{id}', [InHouseController::class, 'show']);

    //     Route::post('/in-house', [InHouseController::class, 'store']);

    //     // In house
    //     Route::patch('/in-house/{in_house}/delete', [InHouseController::class, 'delete']);
    //     Route::patch('/in-house/{in_house}/cancel', [InHouseController::class, 'cancel']);
    //     Route::patch('/in-house/{in_house}/restore', [InHouseController::class, 'restore']);
    //     Route::patch('/in-house/{in_house}/finish', [InHouseController::class, 'finish']);
    // });

    // RESERVATIONS CONTROLLER
    Route::group(['prefix' => 'reservations'], function () {
        // INHOUSE
        Route::get('/in-house', [InHouseController::class, 'index']);
        Route::post('/in-house', [InHouseController::class, 'store']);
        
        Route::get('/in-house/{id}/print', [InHouseController::class, 'print']);

        Route::patch('/in-house/{in_house}/delete', [InHouseController::class, 'delete']);
        Route::patch('/in-house/{in_house}/cancel', [InHouseController::class, 'cancel']);
        Route::patch('/in-house/{in_house}/restore', [InHouseController::class, 'restore']);
        Route::patch('/in-house/{in_house}/finish', [InHouseController::class, 'finish']);
        
        Route::get('/in-house/active', [InHouseController::class, 'active']);
        Route::get('/in-house/finished', [InHouseController::class, 'finished']);
        Route::get('/in-house/cancelled', [InHouseController::class, 'cancelled']);
        Route::get('/in-house/deleted', [InHouseController::class, 'deleted']);
        
        Route::get('/create/in-house', [InHouseController::class, 'create']);
        Route::get('/in-house/{id}', [InHouseController::class, 'show']);

        // HDMF
        Route::get('/hdmf-loan', [HdmfLoanController::class, 'index']);
        Route::post('/hdmf-loan', [HdmfLoanController::class, 'store']);
        
        Route::get('/hdmf-loan/{id}/print', [HdmfLoanController::class, 'print']);
        
        Route::get('/hdmf-loan/active', [HdmfLoanController::class, 'active']);
        Route::get('/hdmf-loan/finished', [HdmfLoanController::class, 'finished']);
        Route::get('/hdmf-loan/cancelled', [HdmfLoanController::class, 'cancelled']);
        Route::get('/hdmf-loan/deleted', [HdmfLoanController::class, 'deleted']);
        
        Route::patch('/hdmf-loan/{id}/delete', [HdmfLoanController::class, 'delete']);
        Route::patch('/hdmf-loan/{id}/cancel', [HdmfLoanController::class, 'cancel']);
        Route::patch('/hdmf-loan/{id}/restore', [HdmfLoanController::class, 'restore']);
        Route::patch('/hdmf-loan/{id}/finish', [HdmfLoanController::class, 'finish']);

        Route::get('/create/hdmf-loan', [HdmfLoanController::class, 'create']);
        Route::get('/hdmf-loan/{id}', [HdmfLoanController::class, 'show']);

        // old
        // Route::get('/active', [ReservationsController::class, 'active']);
        // Route::get('/finished', [ReservationsController::class, 'finished']);
        // Route::get('/cancelled', [ReservationsController::class, 'cancelled']);
        // Route::get('/deleted', [ReservationsController::class, 'deleted']);
        
        // Route::get('/{id}', [ReservationsController::class, 'show']);

        // Route::post('/in-house', [InHouseController::class, 'store']);
        // Route::post('/', [ReservationsController::class, 'store']);

        // // In house

        // // Loan
        // Route::patch('/hdmf-loan/{reservation}/delete', [HdmfLoanController::class, 'delete']);
        // Route::patch('/hdmf-loan/{reservation}/cancel', [HdmfLoanController::class, 'cancel']);
        // Route::patch('/hdmf-loan/{reservation}/restore', [HdmfLoanController::class, 'restore']);
        // Route::patch('/hdmf-loan/{reservation}/finish', [HdmfLoanController::class, 'finish']);

        // // Old
        // Route::patch('/{reservation}/delete', [ReservationsController::class, 'delete']);
        // Route::patch('/{reservation}/cancel', [ReservationsController::class, 'cancel']);
        // Route::patch('/{reservation}/restore', [ReservationsController::class, 'restore']);
        // Route::patch('/{reservation}/finish', [ReservationsController::class, 'finish']);
    });

    //PROPERTIES CONTROLLER
    Route::group(['prefix' => 'properties'], function () {
        // Route::get('/', [PropertiesController::class, 'index']);
        // IN HOUSE
        Route::get('/in-house', [InHousePropertyController::class, 'index']);
        
        Route::get('/in-house/downpayment', [InHousePropertyController::class,'downpayment']);
        Route::get('/in-house/balance', [InHousePropertyController::class,'balance']);
        Route::get('/in-house/fully-paid', [InHousePropertyController::class,'fully_paid']);
        Route::get('/in-house/cancelled', [InHousePropertyController::class,'cancelled']);
        Route::get('/in-house/deleted', [InHousePropertyController::class,'deleted']);
        
        Route::get('/in-house/{id}', [InHousePropertyController::class, 'show']);
        Route::post('/in-house/{id}/payment', [InHousePropertyController::class, 'payment']);
        
        Route::patch('/in-house/{in_house}/delete', [InHousePropertyController::class, 'delete']);
        Route::patch('/in-house/{in_house}/cancel', [InHousePropertyController::class, 'cancel']);
        Route::patch('/in-house/{in_house}/restore', [InHousePropertyController::class, 'restore']);
        
        // HDMF LOAN
        Route::get('/hdmf-loan', [HdmfLoanPropertyController::class, 'index']);
        
        Route::get('/hdmf-loan/equity', [HdmfLoanPropertyController::class,'equity']);
        Route::get('/hdmf-loan/fully-paid', [HdmfLoanPropertyController::class,'fully_paid']);
        Route::get('/hdmf-loan/equity-balance', [HdmfLoanPropertyController::class,'equity_balance']);
        Route::get('/hdmf-loan/cancelled', [HdmfLoanPropertyController::class,'cancelled']);
        Route::get('/hdmf-loan/deleted', [HdmfLoanPropertyController::class,'deleted']);
        
        Route::get('/hdmf-loan/{id}', [HdmfLoanPropertyController::class,'show']);
        Route::post('/hdmf-loan/{id}/payment', [HdmfLoanPropertyController::class, 'payment']);

        Route::patch('/hdmf-loan/{id}/assume', [HdmfLoanPropertyController::class, 'assume']);
        Route::patch('/hdmf-loan/{id}/set-fully-paid', [HdmfLoanPropertyController::class, 'set_fully_paid']);
        Route::patch('/hdmf-loan/{id}/set-equity-balance', [HdmfLoanPropertyController::class, 'set_equity_balance']);
       
        Route::patch('/hdmf-loan/{id}/delete', [HdmfLoanPropertyController::class, 'delete']);
        Route::patch('/hdmf-loan/{id}/cancel', [HdmfLoanPropertyController::class, 'cancel']);
        Route::patch('/hdmf-loan/{id}/restore', [HdmfLoanPropertyController::class, 'restore']);
        


        Route::get('/hdmf-loan/{id}/print-payment-schedule', [HdmfLoanPropertyController::class, 'printPaymentSchedule']);
        Route::get('/in-house/{id}/print-payment-schedule', [InHousePropertyController::class, 'printPaymentSchedule']);
        // Route::get('/{property}', [PropertiesController::class, 'show']);

        
        // Route::patch('/{propertyID}/archive', 'PropertiesController@archiveProperty');
        // Route::patch('/{propertyID}/delete', 'PropertiesController@deleteProperty');
        // Route::patch('/{propertyID}/activate', 'PropertiesController@activateProperty');

        // Route::post('/addPayment/{property}', 'PropertiesController@addPayment');
    });

    //BROKERS CONTROLLER
    Route::group(['prefix' => 'brokers'], function () {
        Route::get('/', [BrokersController::class, 'index']);
        Route::get('/create', [BrokersController::class, 'create']);
        Route::get('/{id}', [BrokersController::class, 'show']);
        Route::get('/{broker}/print', [BrokersController::class, 'print']);
        Route::post('/', [BrokersController::class, 'store']);
        Route::patch('/{broker}/update', [BrokersController::class, 'update']);
        Route::patch('/{broker}/archive', [BrokersController::class, 'archive']);
        Route::patch('/{broker}/unarchive', [BrokersController::class, 'unarchive']);
        Route::patch('/{broker}/delete', [BrokersController::class, 'delete']);
        Route::patch('/client/{id}/remove', [BrokersController::class, 'removeClient']);
        Route::patch('/yawa', function() {
            dd("GAGO");
        });
        Route::patch('/commission/{commission}/release', [BrokersController::class, 'release']);
        
        Route::get('/commission/{id}/print-hdmf', [BrokersController::class, 'printHdmfCommission']);
        Route::get('/commission/{id}/print-inhouse', [BrokersController::class, 'printInHouseCommission']);
    });

    Route::group(['prefix' => 'agents'], function () {
        Route::get('/', [AgentsController::class, 'index']);
        Route::get('/create', [AgentsController::class, 'create']);
        Route::get('/{id}', [AgentsController::class, 'show']);
        Route::post('/', [AgentsController::class, 'store']);

        
        Route::patch('/{agent}/update', [AgentsController::class, 'update']);
        Route::patch('/{agent}/delete', [AgentsController::class, 'destroy']);
    });
});








// Route::get('ajax_regen_captcha', function () {
//     return captcha_src('flat');
// });

// Special Laravel Commands	
Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return "View is cleared";
});

Route::get('/route-clear', function () {
    Artisan::call('route:clear');
    return "Route is cleared";
});

Route::get('/config-clear', function () {
    Artisan::call('config:clear');
    return "Config is cleared";
});

Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return "Config is cached";
});
