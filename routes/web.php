<?php

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

/**
 * login
 * Show Login page
 */
Route::get('/login', function () {
    return view('login');
})->name('login');

/**
 * login_post
 * Receive Login information
 */
Route::post('/login', function () {
    // TODO: change this function, below is testing
    return redirect(route('login'));
})->name('login_post');

/**
 * logout
 * Show Login page
 */
Route::get('/logout', function () {
    // TODO: change this function, below is testing
    return redirect(route('login'));
})->name('logout');

/**
 * Dashboard
 * Show Dashboard page
 */
Route::get('/dashboard', function () {
    // TODO: change this function, below is testing
    return view('dashboard');
})->name('dashboard');

/**
 * create
 * Show Create Request page
 */
Route::get('/create', function () {
    // TODO: change this function, below is testing
    return view('create',
        [
            'loggedUser' => (object)[
                'id' => 1,
                'email' => 'thanhminhmr@gmail.com',
                'name' => 'Mai Thanh Minh',
                'team_id' => 102,
                'position_id' => 402
            ],
            'users' => [
                (object)[
                    'id' => 1,
                    'name' => 'Mai Thanh Minh'
                ],
                (object)[
                    'id' => 2,
                    'name' => 'User Name One'
                ],
                (object)[
                    'id' => 3,
                    'name' => 'User Name Two'
                ],
                (object)[
                    'id' => 4,
                    'name' => 'User Name Three'
                ],
                (object)[
                    'id' => 5,
                    'name' => 'User Name Four'
                ]
            ],
            'teams' => [
                (object)[
                    'id' => 101,
                    'name' => 'Team Name One'
                ],
                (object)[
                    'id' => 102,
                    'name' => 'Team Name Two'
                ],
                (object)[
                    'id' => 103,
                    'name' => 'Team Name Three'
                ],
                (object)[
                    'id' => 104,
                    'name' => 'Team Name Four'
                ]
            ],
            'priorities' => [
                (object)[
                    'id' => 201,
                    'name' => 'Low'
                ],
                (object)[
                    'id' => 202,
                    'name' => 'Medium'
                ],
                (object)[
                    'id' => 203,
                    'name' => 'High'
                ],
                (object)[
                    'id' => 204,
                    'name' => 'Critical'
                ]
            ],
            'departments' => [
                (object)[
                    'id' => 301,
                    'name' => 'Hanoi'
                ],
                (object)[
                    'id' => 302,
                    'name' => 'Danang'
                ]
            ],
            'positions' => [
                (object)[
                    'id' => 401,
                    'name' => 'Member'
                ],
                (object)[
                    'id' => 402,
                    'name' => 'Sub-Leader'
                ],
                (object)[
                    'id' => 403,
                    'name' => 'Leader'
                ]
            ]
        ]);
})->name('create');

/**
 * create_post
 * Receive Create Request information
 */
Route::post('/create', function () {
    // TODO: change this function, below is testing
    return redirect(route('dashboard'));
})->name('create_post');

/**
 * view
 * Show View Request page
 */
Route::get('/view', function () {
    // TODO: change this function, below is testing
    return view('view',
        [
            'loggedUser' => (object)[
                'id' => 1,
                'email' => 'thanhminhmr@gmail.com',
                'name' => 'Mai Thanh Minh',
                'team_id' => 102,
                'position_id' => 402
            ],
            'users' => [
                (object)[
                    'id' => 1,
                    'name' => 'Mai Thanh Minh'
                ],
                (object)[
                    'id' => 2,
                    'name' => 'User Name One'
                ],
                (object)[
                    'id' => 3,
                    'name' => 'User Name Two'
                ],
                (object)[
                    'id' => 4,
                    'name' => 'User Name Three'
                ],
                (object)[
                    'id' => 5,
                    'name' => 'User Name Four'
                ]
            ],
            'teams' => [
                (object)[
                    'id' => 101,
                    'name' => 'Team Name One'
                ],
                (object)[
                    'id' => 102,
                    'name' => 'Team Name Two'
                ],
                (object)[
                    'id' => 103,
                    'name' => 'Team Name Three'
                ],
                (object)[
                    'id' => 104,
                    'name' => 'Team Name Four'
                ]
            ],
            'priorities' => [
                (object)[
                    'id' => 201,
                    'name' => 'Low'
                ],
                (object)[
                    'id' => 202,
                    'name' => 'Medium'
                ],
                (object)[
                    'id' => 203,
                    'name' => 'High'
                ],
                (object)[
                    'id' => 204,
                    'name' => 'Critical'
                ]
            ],
            'departments' => [
                (object)[
                    'id' => 301,
                    'name' => 'Hanoi'
                ],
                (object)[
                    'id' => 302,
                    'name' => 'Danang'
                ]
            ],
            'positions' => [
                (object)[
                    'id' => 401,
                    'name' => 'Member'
                ],
                (object)[
                    'id' => 402,
                    'name' => 'Sub-Leader'
                ],
                (object)[
                    'id' => 403,
                    'name' => 'Leader'
                ]
            ]
        ]);
})->name('view');

/**
 * comment_post
 * Receive Comment information
 */
Route::post('/comment', function () {
    // TODO: change this function, below is testing
    return redirect(route('dashboard'));
})->name('comment_post');

/**
 * edit
 * Show Edit Request page
 */
Route::get('/edit', function () {
    // TODO: change this function, below is testing
    return view('view',
        [
            'loggedUser' => (object)[
                'id' => 1,
                'email' => 'thanhminhmr@gmail.com',
                'name' => 'Mai Thanh Minh',
                'team_id' => 102,
                'position_id' => 402
            ],
            'users' => [
                (object)[
                    'id' => 1,
                    'name' => 'Mai Thanh Minh'
                ],
                (object)[
                    'id' => 2,
                    'name' => 'User Name One'
                ],
                (object)[
                    'id' => 3,
                    'name' => 'User Name Two'
                ],
                (object)[
                    'id' => 4,
                    'name' => 'User Name Three'
                ],
                (object)[
                    'id' => 5,
                    'name' => 'User Name Four'
                ]
            ],
            'teams' => [
                (object)[
                    'id' => 101,
                    'name' => 'Team Name One'
                ],
                (object)[
                    'id' => 102,
                    'name' => 'Team Name Two'
                ],
                (object)[
                    'id' => 103,
                    'name' => 'Team Name Three'
                ],
                (object)[
                    'id' => 104,
                    'name' => 'Team Name Four'
                ]
            ],
            'priorities' => [
                (object)[
                    'id' => 201,
                    'name' => 'Low'
                ],
                (object)[
                    'id' => 202,
                    'name' => 'Medium'
                ],
                (object)[
                    'id' => 203,
                    'name' => 'High'
                ],
                (object)[
                    'id' => 204,
                    'name' => 'Critical'
                ]
            ],
            'departments' => [
                (object)[
                    'id' => 301,
                    'name' => 'Hanoi'
                ],
                (object)[
                    'id' => 302,
                    'name' => 'Danang'
                ]
            ],
            'positions' => [
                (object)[
                    'id' => 401,
                    'name' => 'Member'
                ],
                (object)[
                    'id' => 402,
                    'name' => 'Sub-Leader'
                ],
                (object)[
                    'id' => 403,
                    'name' => 'Leader'
                ]
            ]
        ]);
})->name('edit');

/**
 * edit_post
 * Receive Edit information
 */
Route::post('/edit', function () {
    // TODO: change this function, below is testing
    return redirect(route('dashboard'));
})->name('edit_post');

/**
 * list
 * Show List Request page
 */
Route::get('/list', function () {
    return 'list';
})->name('request_list');


















