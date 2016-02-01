<?php



App::bind(App\Repositories\IInvoiceRepository::class,
    App\Repositories\InvoiceRepository::class);

Route::group(['middleware' => 'web'], function () {
    Route::get('testSendEmail','ContactEmailController@send');

    //helpers
    Route::get('/testSendEmail', function () {
        dispatch(new App\Jobs\Sendsubscriptionemail);

        return 'Done!';
    });
});




