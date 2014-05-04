<?php

use FAD\Services\Search\UserSearchService;

class UsersAPIController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function search()
	{
    $userSearchService = new UserSearchService();
    return $userSearchService->search(Input::all());
	}
}
