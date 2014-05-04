<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

  public function getImport()
  {
    try
    {
      $fileData = file_get_contents('/Users/brandonkboswell/Desktop/laravelList.json');
    }
    catch (Exception $e)
    {
      dd($e);
    }

    // return $fileData;

    $batches = json_decode($fileData);

    foreach ($batches as $batch)
    {
      $users = $batch->users;

      foreach ($users as $userData)
      {
        User::createFromTwitter($userData);
      }
    }
  }
}
