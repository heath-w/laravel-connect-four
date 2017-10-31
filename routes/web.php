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

Route::get( '/', function () {
  return view( 'welcome' );
});

Route::get( '/c4', function () {
	$players = [ 'Red', 'Blue' ];
	$turn = 5;
	$currentPlayer = $players[ $turn % 2 ];
	$board = [];
	$boardRows = 6;
	$boardColumns = 7;
	for ( $r = 0; $r < $boardRows; $r++ ) {
		for ( $c = 0; $c < $boardColumns; $c++ ) {
			$board[$r][$c] = 'red';
		}
	}

	// var_dump( $board );

  return view( 'board', compact( 'currentPlayer', 'board', 'boardRows', 'boardColumns' ) );
});
