<?php
Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'roles'], 'block' => ['User']], function () {
    Route::group(['roles' => ['Author', 'Moderator', 'Admin']], function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('profile', 'ProfileController@index')->name('profile.index');
        Route::get('profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');
        Route::put('profile/{id}/edit', 'ProfileController@updateedit');
        Route::get('profile/{id}/password', 'ProfileController@password')->name('profile.password');
        Route::put('profile/{id}/password', 'ProfileController@updatepassword');
        Route::delete('profile/{id}', 'ProfileController@destroy')->name('profile.destroy');
    });
    Route::group(['roles' => ['Moderator', 'Admin']], function () {
        Route::resource('contact-with-me', 'ContactwithmeController');
        Route::resource('knowledge-of-languages', 'LanguageknowledgeController');
        Route::resource('educations', 'EducationController');
        Route::resource('about-me', 'AboutmeController');
        Route::resource('experiences', 'ExperienceController');
        Route::resource('skills', 'SkillController');
        Route::resource('projects', 'ProjectController');
    });
    Route::group(['roles' => ['Admin']], function () {
        Route::resource('users', 'UserController');
        Route::get('roles', 'RoleController@index')->name('roles.index');
        Route::get('role/{id}', 'RoleController@show')->name('roles.show');
        Route::get('roles/{id}/edit', 'RoleController@edit')->name('roles.edit');
        Route::put('roles/{id}', 'RoleController@update')->name('roles.update');
        Route::get('settings', 'AdminController@settings')->name('admin.settings');
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('admin.logs');
    });
});
Route::namespace('Site')->group(function () {
    Route::get('/', 'SiteController@index')->name('site.index');
    Route::get('men', 'SiteController@men')->name('site.men');
    Route::get('women', 'SiteController@women')->name('site.women');
    Route::get('kids', 'SiteController@kids')->name('site.kids');
    Route::get('cart', 'SiteController@cart')->name('site.cart');
    Route::get('contact', 'SiteController@contact')->name('site.contact');
});
