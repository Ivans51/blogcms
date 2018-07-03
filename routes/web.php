<?php


use GuzzleHttp\Client;

Auth::routes();

Route:: redirect( '/', 'blog' );

Route::get( 'blog', 'Web\PageController@blog' )->name( 'blog' );
Route::get( 'blog/{slug}', 'Web\PageController@post' )->name( 'post' );
Route::get( 'category/{slug}', 'Web\PageController@category' )->name( 'category' );
Route::get( 'tag/{slug}', 'Web\PageController@tag' )->name( 'tag' );
Route::get( '/test', function () {
	require '../vendor/autoload.php';
	$client   = new Client( [
		'base_uri' => 'https://jsonplaceholder.typicode.com',
		'timeout'  => 2.0,
	] );
	$response = $client->request( 'GET', '/users' );
	$posts    = json_decode( $response->getBody()->getContents() );

	return view( 'test', compact( 'posts' ) );
} );
// Route::view('/blog', 'web/posts');

Route::resource( 'tags', 'Admin\TagController' );
Route::resource( 'categories', 'Admin\CategoryController' );
Route::resource( 'posts', 'Admin\PostController' );

