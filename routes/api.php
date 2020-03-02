<?php


Route::group([
    'middleware' => 'web',
    'prefix' => 'v1'
], function () {

    
    
    Route::apiResource('/users', 'Api\ApiUserController')->only([
        'index'
    ]);
    Route::apiResource('/history', 'Api\ApiHistoryController')->only([
        'index'
   ]);
   Route::apiResource('/guide', 'Api\ApiGuideController');
   Route::apiResource('/guide/invoice', 'Api\ApiInvoiceController');
     

});


Route::group([
    'prefix' => 'v1'
], function () {

    #user
    Route::apiResource('/users', 'Api\ApiUserController')->only([
        'store', 'update', 'destroy'
    ]);
    Route::put('/users/{id}/reset_password', 'Api\ApiUserController@reset_password');

        #เชิญ
  

    #ประวัติลูกค้า
    Route::apiResource('/history', 'Api\ApiHistoryController')->only([
         'update', 'destroy'
    ]);

    Route::get('/users/changestatus/update', 'Api\ApiUserController@changestatus');


    Route::get('/users/changestatus/update', 'Api\ApiUserController@changestatus');

    // Route::apiResource('/position', 'Api\ApiPositionController');
    
});