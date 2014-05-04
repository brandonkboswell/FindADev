<?php namespace FAD\Services\Search;

  use User;

  class UserSearchService {

    public function search($data = array())
    {
      $limit     = 10;
      $query     = isset($data['query']) ? $data['query'] : "";
      $baseQuery = User::take($limit);

      if ($query)
      {
        $baseQuery->where('location', '!=', '')
                  ->where('location', 'LIKE', "%$query%");
      }

      return $baseQuery->get();
    }
  }
