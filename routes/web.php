<?php

Route::get('/', function () {
    return view('resume');
});

Route::get('send-email','EmailController@send')->name('post.contact-us');
