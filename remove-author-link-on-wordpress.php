<?php //* Remove this line if you copy this code snippet

/**
 *	Remove Author Link on Wordpress 
 *	@author wphobby.com
 *	@link http://wphobby.com/remove-author-link-wordpress-website/
 *
 *	@param string $return The Comment author link
 *	@param string $author The comment author's username
 *	@param int $comment_ID The comment ID
 *
 *	@return string $author
 */
add_filter( 'get_comment_author_link', 'remove_comment_author_link', 10, 3 );
function remove_comment_author_link( $return, $author, $comment_ID ) {
	return $author;
}
