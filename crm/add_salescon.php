<?php
/*
Template Name: add_salescon
*/
?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
					<?php the_content(); ?>
<style>

html { overflow-y: scroll; }
body { position: absolute; }


input[type=text] {
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=email]{
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

</style>


<?php
include ("connect.php");

if (isset($_POST['save'])){
        $c_name=$_POST['c_name'];
        $c_name2=$_POST['c_name2'];
	$c_businesscode=$_POST['c_businesscode'];
        $c_address=$_POST['c_address'];
        $c_postal_code=$_POST['c_postal_code'];
        $c_city=$_POST['c_city'];
        $c_country=$_POST['c_country'];
	$c_phone=$_POST['c_phone'];
        $c_email=$_POST['c_email'];
        $c_www=$_POST['c_www'];
	$c_domain=$_POST['c_domain'];
	$company_info=$_POST['company_info'];
        $c_title_1=$_POST['c_title_1'];
	$c_name_1=$_POST['c_name_1'];
	$c_phone_1=$_POST['c_phone_1'];
	$c_email_1=$_POST['c_email_1'];
        $c_title_2=$_POST['c_title_2'];
        $c_name_2=$_POST['c_name_2'];
        $c_phone_2=$_POST['c_phone_2'];
        $c_email_2=$_POST['c_email_2'];
        $c_title_3=$_POST['c_title_3'];
        $c_name_3=$_POST['c_name_3'];
        $c_phone_3=$_POST['c_phone_3'];
        $c_email_3=$_POST['c_email_3'];
        $c_title_4=$_POST['c_title_4'];
        $c_name_4=$_POST['c_name_4'];
        $c_phone_4=$_POST['c_phone_4'];
        $c_email_4=$_POST['c_email_4'];
	$c_info1=$_POST['c_info1'];
	$c_info2=$_POST['c_info2'];
	$c_info3=$_POST['c_info3'];
	$c_info4=$_POST['c_info4'];
	
        $query="
        INSERT INTO Customer SET  c_name=\"$c_name\", c_name2=\"$c_name2\", c_businesscode=\"$c_businesscode\", c_address=\"$c_address\", c_postal_code=\"$c_postal_code\", c_city=\"$c_city\", c_country=\"$c_country\", c_phone=\"$c_phone\", c_email=\"$c_email\",c_www=\"$c_www\",company_info=\"$company_info\", c_title_1=\"$c_title_1\", c_name_1=\"$c_name_1\", c_phone_1=\"$c_phone_1\", c_email_1=\"$c_email_1\",c_info1=\"$c_info1\", c_title_2=\"$c_title_2\", c_name_2=\"$c_name_2\", c_phone_2=\"$c_phone_2\", c_email_2=\"$c_email_2\",c_info2=\"$c_info2\",c_title_3=\"$c_title_3\", c_name_3=\"$c_name_3\", c_phone_3=\"$c_phone_3\", c_email_3=\"$c_email_3\",c_info3=\"$c_info3\",c_title_4=\"$c_title_4\", c_name_4=\"$c_name_4\", c_phone_4=\"$c_phone_4\", c_email_4=\"$c_email_4\", c_info4=\"$c_info4\"";

        $result=mysql_query($query);
        $index=mysql_insert_id();
        if ($result && $index>0){
		$query="
		UPDATE Customer SET c_details=\"$c_details\" WHERE id=$index";
		mysql_query($query);
                echo "Contact Registered<br>";
        } else {
                echo "Error";
		die(mysql_error());
        }
} else {
?>
<html>
<body>
<form method="post" action="<?php echo get_permalink(); ?>">
<table>
<tr><td>Company:</td><td><input type="text" name="c_name"></td></tr>
<tr><td>Other Name:</td><td><input type="text" name="c_name2"></td></tr>
<tr><td>Business Id:</td><td><input type="text" name="c_businesscode"></td></tr>
<tr><td>Address:</td><td><input type="text" name="c_address"></td></tr>
<tr><td>Postalcode:</td><td><input type="text" name="c_postal_code"></td></tr>
<tr><td>City:</td><td><input type="text" name="c_city"></td></tr>
<tr><td>Country:</td><td><input type="text" name="c_country" value=Finland></td></tr>
<tr><td>Phone:</td><td><input type="text" name="c_phone"></td></tr>
<tr><td>Email:</td><td><input type="email" name="c_email"></td></tr>
<tr><td>WWW:</td><td><input type="text" name="c_www"></td></tr>
<tr><td>Info:</td><td><textarea name="company_info"></textarea></td></tr>
<tr><td></td><td></td></tr>

<tr><td colspan=2><b>Contact Info</b></td></tr>
<tr><td>Title:</td><td><input type="text" name="c_title_1"></td></tr>
<tr><td>Name:</td><td><input type="text" name="c_name_1"></td></tr>
<tr><td>Phone:</td><td><input type="text" name="c_phone_1"></td></tr>
<tr><td>Email:</td><td><input type="email" name="c_email_1"></td></tr>
<tr><td>Info:</td><td><textarea name="c_info1"></textarea></td></tr>

<tr><td colspan=2><hr></td></tr>
<tr><td>Title:</td><td><input type="text" name="c_title_2"></td></tr>
<tr><td>Name:</td><td><input type="text" name="c_name_2"></td></tr>
<tr><td>Phone:</td><td><input type="text" name="c_phone_2"></td></tr>
<tr><td>Email:</td><td><input type="email" name="c_email_2"></td></tr>
<tr><td>Info:</td><td><textarea name="c_info2"></textarea></td></tr>

<tr><td colspan=2><hr></td></tr>
<tr><td>Title:</td><td><input type="text" name="c_title_3"></td></tr>
<tr><td>Name:</td><td><input type="text" name="c_name_3"></td></tr>
<tr><td>Phone:</td><td><input type="text" name="c_phone_3"></td></tr>
<tr><td>Email:</td><td><input type="email" name="c_email_3"></td></tr>
<tr><td>Info:</td><td><textarea name="c_info3"></textarea></td></tr>

<tr><td colspan=2><hr></td></tr>
<tr><td>Title:</td><td><input type="text" name="c_title_4"></td></tr>
<tr><td>Name:</td><td><input type="text" name="c_name_4"></td></tr>
<tr><td>Phone:</td><td><input type="text" name="c_phone_4"></td></tr>
<tr><td>Email:</td><td><input type="email" name="c_email_4"></td></tr>
<tr><td>Info:</td><td><textarea name="c_info4"></textarea></td></tr>

<tr><td></td><td><input type='submit' value='Save' name='save'><input type='reset' value='Reset' name='reset'></td></tr>
</table>
</form>
<?php
}
?>
<br/>								
<form action="/calendar/">
    <input type="submit" value="Back" />
</form>		

</body>
</html>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php //edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
