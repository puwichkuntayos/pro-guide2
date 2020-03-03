<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

## หน้าบ้าน
Route::resource('/guides/register', 'GuideRegisterController')->only([
    'show', 'store','update'
]);
Route::get('/guides/register/success/{id}', 'GuideRegisterController@success');
Route::get('/guides/register/edit/{id}', 'GuideRegisterController@edit');
Route::get('/users/successforget/{id}', 'UserController@successforget');
Route::get('/users/errorforget', 'UserController@errorforget');

Route::get('/new_password', 'UserController@new_password');
Route::post('/change_password', 'UserController@change_password');
Route::get('/users/showpassword', 'UserController@showforget');
Route::post('/users/forgetpassword', 'UserController@Forgetpassword');


Route::get('/showpdf', 'PDFController@pdf');

## หลังบ้าน
Auth::routes([
    'register' => false,
    'verify' => true,
    'reset' => false
]);


Route::group([
    'middleware' => ['auth'],
    // 'roles' => ['Admin']
], function () {


    //admin
    Route::group([

        'middleware' => ['checkadmin:1']
                // 'roles' => ['Admin']
        ], function () {

            Route::resource('/users', 'UserController')->except([
        'store', 'update', 'destroy'
    ]);

     Route::get('/', function () {
        // dd(Auth::user());
        return redirect('/user');
    });
    Route::get('/users/{id}/reset_password', 'UserController@reset_password');
    Route::get('/users/{id}/delete', 'UserController@delete');

    // Route::resource('/guides/register', 'GuideRegisterController')->only([
    // 'update'
    // ]);
    // Route::get('/guides/register/success/{id}', 'GuideRegisterController@success');


    #ประวัติลูกค้า

    Route::prefix('/guides')->group(function () {
    #ใช้เป็นกรุ๊ป
        Route::get('/confirm', 'GuideController@index');
        Route::get('/verify', 'GuideController@index');
        Route::get('/invited', 'GuideController@index');
        Route::get('/cancel', 'GuideController@index');
        Route::get('/wait', 'GuideController@index');
        Route::get('/invite', 'GuideController@invite');
        Route::post('/invite', 'GuideController@inviteStore');
        Route::get('/reinvite/{id}', 'GuideController@reinvite');
        Route::post('/reinvite', 'GuideController@reinviteStore');

        // Route::get('/register/{id}', 'GuideRegisterController@index');

    });

    #ตำแหน่ง


    Route::resource('/positions', 'PositionController');
    Route::prefix('/positions')->group(function () {
        #ใช้เป็นกรุ๊ป
        Route::get('/', 'PositionController@index');
        Route::get('/confirm', 'PositionController@index');
        Route::get('/verify', 'PositionController@index');
        Route::get('/invited', 'PositionController@index');
        Route::get('/cancel', 'PositionController@index');
    });
    Route::get('/positions/{param}', function () {
        return abort(404);
    });




    Route::get('/guides/find/{tab}', 'GuideController@find');
    Route::resource('/guides', 'GuideController')->only(
        'index',
        'show',
        'update'
    );

    Route::get('/guides/{param}', function () {
        return abort(404);
    });


    //

    Route::resource('sendemail', 'SendemailController');

    #แผนก



         # paymentvouchers
        Route::prefix('/paymentvouchers')->group(function () {
            Route::get('/confirm', 'PaymentVoucherController@index');
            Route::get('/checkup', 'PaymentVoucherController@index');
            Route::get('/pay', 'PaymentVoucherController@index');
            Route::get('/cancel', 'PaymentVoucherController@index');
        });
        // Route::get('/paymentvouchers/find', 'PaymentVoucherController@find');
        Route::get('/paymentvouchers/find/{tab}', 'PaymentVoucherController@find');

        Route::resource('/paymentvouchers', 'PaymentVoucherController')->only(
            'index', 'show', 'update','edit','create','store'
        );

        Route::get('/paymentvouchers/{param}', function ()
        {
            return abort(404);
        });
        // end



        # totalpayments
        Route::prefix('/totalpayments')->group(function () {
            Route::get('/confirm', 'TotalPaymentController@index');
            Route::get('/checkup', 'TotalPaymentController@index');
            Route::get('/pay', 'TotalPaymentController@index');
            Route::get('/cancel', 'TotalPaymentController@index');
        });
        // Route::get('/totalpayments/find', 'TotalPaymentController@find');
        Route::get('/totalpayments/find/{tab}', 'TotalPaymentController@find');
        Route::get('/totalpayments/{id}', 'TotalPaymentController@pdf_totalpayments')->name('pdf.totalpayments');;
        Route::get('/percentpdf/{id}', 'TotalPaymentController@pdf_percentpdf')->name('pdf.percentpdf');

        Route::resource('/totalpayments', 'TotalPaymentController')->only(
            'index', 'show', 'update','edit'
        );

        Route::get('/totalpayments/{param}', function ()
        {
            return abort(404);
        });
       // end

       # totalpaymentvouchers
       Route::prefix('/totalpaymentvouchers')->group(function () {
           Route::get('/confirm', 'TotalPaymentVouchersController@index');
           Route::get('/checkup', 'TotalPaymentVouchersController@index');
           Route::get('/cancel', 'TotalPaymentVouchersController@index');
           Route::get('/pay', 'TotalPaymentVouchersController@index');
       });
       Route::get('/totalpaymentvouchers/find/{tab}', 'TotalPaymentVouchersController@find');

       Route::resource('/totalpaymentvouchers', 'TotalPaymentVouchersController')->only(
           'index', 'edit'
       );
       Route::get('/totalpaymentvouchers/{param}', function ()
       {
           return abort(404);
       });
      // end




        });
    //endadmin

        //accounting
        Route::group(['middleware' => ['checkadmin:1,2']], function () {

        Route::get('/', function () {
                 // dd(Auth::user());
            return redirect('/totalpayments');
        });


            Route::resource('/users', 'UserController')->except([
                'store', 'update', 'destroy'
            ]);
            Route::get('/users/{id}/reset_password', 'UserController@reset_password');
            Route::get('/users/{id}/delete', 'UserController@delete');

            # totalpayments
        Route::prefix('/totalpayments')->group(function () {
            Route::get('/confirm', 'TotalPaymentController@index');
            Route::get('/checkup', 'TotalPaymentController@index');
            Route::get('/cancel', 'TotalPaymentController@index');
            Route::get('/pay', 'TotalPaymentController@index');
        });
        // Route::get('/totalpayments/find', 'TotalPaymentController@find');
        Route::get('/totalpayments/find/{tab}', 'TotalPaymentController@find');
        Route::get('/totalpayments/{id}', 'TotalPaymentController@pdf_totalpayments')->name('pdf.totalpayments');
        Route::get('/percentpdf/{id}', 'TotalPaymentController@pdf_percentpdf')->name('pdf.percentpdf');

        Route::resource('/totalpayments', 'TotalPaymentController')->only(
            'index', 'show', 'update','edit'
        );
        Route::get('/totalpayments/{param}', function ()
        {
            return abort(404);
        });
       // end


        });
      //endaccounting

 //TL
 Route::group(['middleware' => ['checkadmin:1,2,3']], function () {

      Route::resource('/users', 'UserController')->except([
        'store', 'update', 'destroy'
    ]);

     Route::get('/', function () {
        // dd(Auth::user());
        return redirect('/user');
    });
    Route::get('/users/{id}/reset_password', 'UserController@reset_password');
    Route::get('/users/{id}/delete', 'UserController@delete');



    #ประวัติลูกค้า

    Route::prefix('/guides')->group(function () {
#ใช้เป็นกรุ๊ป
        Route::get('/confirm', 'GuideController@index');
        Route::get('/verify', 'GuideController@index');
        Route::get('/invited', 'GuideController@index');
        Route::get('/cancel', 'GuideController@index');
        Route::get('/wait', 'GuideController@index');
        Route::get('/invite', 'GuideController@invite');
        Route::post('/invite', 'GuideController@inviteStore');
        Route::get('/reinvite/{id}', 'GuideController@reinvite');
        Route::post('/reinvite', 'GuideController@reinviteStore');

        // Route::get('/register/{id}', 'GuideRegisterController@index');

    });

#ตำแหน่ง


    Route::get('/guides/find/{tab}', 'GuideController@find');
    Route::resource('/guides', 'GuideController')->only(
        'index',
        'show',
        'update'
    );

    Route::get('/guides/{param}', function () {
        return abort(404);
    });


    //

    Route::resource('sendemail', 'SendemailController');

    #แผนก

         # paymentvouchers
        Route::prefix('/paymentvouchers')->group(function () {
            Route::get('/confirm', 'PaymentVoucherController@index');
            Route::get('/checkup', 'PaymentVoucherController@index');
            Route::get('/cancel', 'PaymentVoucherController@index');
            Route::get('/pay', 'PaymentVoucherController@index');
        });
        // Route::get('/paymentvouchers/find', 'PaymentVoucherController@find');
        Route::get('/paymentvouchers/find/{tab}', 'PaymentVoucherController@find');

        Route::resource('/paymentvouchers', 'PaymentVoucherController')->only(
            'index', 'show', 'update','edit','create','store'
        );

        Route::get('/paymentvouchers/{param}', function ()
        {
            return abort(404);
        });
        // end


       # totalpaymentvouchers
       Route::prefix('/totalpaymentvouchers')->group(function () {
           Route::get('/confirm', 'TotalPaymentVouchersController@index');
           Route::get('/checkup', 'TotalPaymentVouchersController@index');
           Route::get('/cancel', 'TotalPaymentVouchersController@index');
           Route::get('/pay', 'TotalPaymentVouchersController@index');
       });
       Route::get('/totalpaymentvouchers/find/{tab}', 'TotalPaymentVouchersController@find');

       Route::resource('/totalpaymentvouchers', 'TotalPaymentVouchersController')->only(
           'index', 'edit'
       );
       Route::get('/totalpaymentvouchers/{param}', function ()
       {
           return abort(404);
       });
      // end
       });
      // end
 //endTL

 Route::group(['middleware' => ['checkadmin:1,2,3,4']], function () {


    Route::get('/', function () {
        // dd(Auth::user());
        return redirect('/users');
    });

    Route::resource('/users', 'UserController')->except([
        'store', 'update', 'destroy'
    ]);

    Route::get('/users/{id}/reset_password', 'UserController@reset_password');
    Route::get('/users/{id}/delete', 'UserController@delete');

     # paymentvouchers
        Route::prefix('/paymentvouchers')->group(function () {
            Route::get('/confirm', 'PaymentVoucherController@index');
            Route::get('/checkup', 'PaymentVoucherController@index');
            Route::get('/cancel', 'PaymentVoucherController@index');
            Route::get('/pay', 'PaymentVoucherController@index');
        });
        // Route::get('/paymentvouchers/find', 'PaymentVoucherController@find');
        Route::get('/paymentvouchers/find/{tab}', 'PaymentVoucherController@find');

        Route::get('/totalpayments/{id}', 'TotalPaymentController@pdf_totalpayments')->name('pdf.totalpayments');
        Route::get('/cancelpayments/{id}', 'PaymentVoucherController@cancelpayments')->name('cancelpayments');
        Route::put('/cancelpaymentsvouchers/{id}', 'PaymentVoucherController@cancelpaymentsvouchers');
        Route::resource('/paymentvouchers', 'PaymentVoucherController')->only(
            'index', 'show', 'update','edit','create','store'
        );

        Route::get('/paymentvouchers/{param}', function ()
        {
            return abort(404);
        });
        // end

 });








});

#ติดต่อ
Route::resource('/contact', 'ContactConreoller');

Route::get('/account/logout', 'AccountController@logout', [

    'middleware' => ['auth', 'roles'],
    'roles' => ['Admin', 'Author'],
]);


//     Route::group([
//     'middleware' => ['auth', 'checkguidetl']
//     // 'roles' => ['Admin']
// ], function () {
//     Route::prefix('/invoice')->group(function () {
//         Route::get('/', 'InvoiceController@index');
//         Route::get('/verify', 'InvoiceController@index');
//         Route::get('/confirm', 'InvoiceController@index');
//         Route::get('/cancel', 'InvoiceController@index');
//         Route::get('/create', 'InvoiceController@create');
//     });


//     Route::get('/invoice/find/{tab}', 'InvoiceController@find');
//     Route::resource('/invoice', 'InvoiceController')->only(
//         'index',
//         'show',
//         'update',
//         'update',
//     );
// });
