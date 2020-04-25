<?php
/**
 * Template for displaying search forms 
 *
 * @package WordPress
 * @subpackage Osereso
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Rechercher &hellip;', 'placeholder', 'osereso' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<i class="glyphicon glyphicon-search">&nbsp;</i>
</form>
