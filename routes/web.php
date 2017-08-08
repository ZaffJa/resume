<?php

Route::get('/', 'EmailController@main');

Route::get('send-email','EmailController@send')->name('post.contact-us');
