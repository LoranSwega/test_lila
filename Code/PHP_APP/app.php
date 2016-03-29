<?php 

/**
 *
 * Method to get all posts from all users. Returns an array of php objects
 *
 * @return      array
 *
 */
function get_posts()
{
	return json_decode(file_get_contents('PHP_APP/fake_query_result.json'));
}

?>