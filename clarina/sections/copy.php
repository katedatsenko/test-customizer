<?php
/**
 * Latest news template file
 *
 * PHP version 5.6
 *
 * @category    Sections
 * @package     Llorix_One_Lite
 * @author      Themeisle <cristian@themeisle.com>
 * @license     GNU General Public License v2 or later
 * @link        http://themeisle.com
 */

global $wp_customize;
$llorix_one_lite_category_show = get_theme_mod( 'llorix_one_lite_category_show' );

$llorix_one_lite_category_title = get_theme_mod( 'llorix_one_lite_category_title', esc_html__( 'title category bla bla','llorix-one-lite' ) );
$llorix_one_lite_category_subtitle = get_theme_mod( 'llorix_one_lite_category_subtitle', esc_html__( 'subtitle category bla bla','llorix-one-lite' ) );

?>
<section class="brief text-left brief-design-one brief-left">
<div class="section-overlay-layer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 content-section brief-content-one">
				<h2 class="text-left dark-text"> <?php echo $llorix_one_lite_category_title; ?>
				</h2>
				<div class="colored-line-left"></div>
				<div class="brief-content-text"><?php echo $llorix_one_lite_category_subtitle; ?></div>

			</div>

		</div>
	</div>
</div>
<div class='test'>

<?php
$args = array(
	'orderby'      => 'name',
	'hide_empty'   => 0,
	'taxonomy'     => 'category'
	// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
);
 

$category_images = get_option( 'category_images' ); 
 
 /* $a =  '';
 $cat_img= '';
 foreach ($category_images  as $a) {
 	$cat_img .= $acategory_images;
 	}
 	echo  $cat_img;
*/
$test = get_categories ( $args , $category_images);
foreach($test as $category) {
		 
		$idcat = $category->term_taxonomy_id;
		$namecat = $category->name;
        
		echo '<br>';
			echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p>';
				 	
}
 ?>

 <pre>
 	<?php  var_dump( $category_images );?>
 </pre>
 </div>
</section>



