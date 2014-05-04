<?php

use FAD\Services\Search\UserSearchService;

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    //Simulate Real World Speed
    sleep(1);

    $userSearchService = new UserSearchService();
    $results = $userSearchService->search(Input::all());

    return View::make('users.index')->with('users', $results);
	}
}
