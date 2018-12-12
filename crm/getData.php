<?php
/*
Template Name: data
*/
?>
<style>
.parent {
    width: 100%;
}
.parent > .first {
    width: 300px;
    float: left;
   
}
.parent > .last {
    width: auto;
    float: right;
    text-align:left
}

td
{
width: 40px;

}

</style>
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

						
					</header><!-- .entry-header -->

					<div class="entry-content">

<html>

<meta charset='utf-8' />
	
	
	<?php include 'connect.php';
	


if (isset($_POST["painike"])) {	
	$given=$_POST['yourname']; 
	

	$sql=mysql_query("SELECT * FROM Customer WHERE income_year<$given");
			if(mysql_num_rows($sql)){
				while($rs=mysql_fetch_array($sql)){
     				$id=$rs['id'];
 


 ?>
		<table align="center" width="60%">
<tr>	
		<td><u><b>Company Name</b></u></td> 
		<td><u><b>Domain</b></u></td>
		<td><u><b>Income Last Year</b></u></td>
		<td><u><b>Income This Year</b></u></td>

</tr>
<tr>
		<td><?php echo $rs['c_name']; ?></td>
		<td><?php echo $rs['c_domain']; ?></td>
		<td><?php echo $rs['income_year']; ?>  &euro;</td>
		<td><?php echo $rs['income_year2']; ?>  &euro;</td>
		<td><a href="/details/?id=<?php echo $id;?>">Details</a></td>

</tr>
</table>
<?php 
}
 }

	}

if (isset($_POST["painike2"])) {	
	$given=$_POST['yourname2']; 
	

	$sql=mysql_query("SELECT * FROM Customer WHERE income_year>$given");
			if(mysql_num_rows($sql)){
				while($rs=mysql_fetch_array($sql)){
     				$id=$rs['id'];
 


 ?>
		<table align="center" width="60%">
<tr>	
		<td><u><b>Company Name</b></u></td> 
		<td><u><b>Domain</b></u></td>
		<td><u><b>Income Last Year</b></u></td>
		<td><u><b>Income This Year</b></u></td>

</tr>
<tr>
		<td><?php echo $rs['c_name']; ?></td>
		<td><?php echo $rs['c_domain']; ?></td>

		<td><?php echo $rs['income_year']; ?>  &euro;</td>
		<td><?php echo $rs['income_year2']; ?>  &euro;</td>
		<td><a href="details/?id=<?php echo $id;?>">Details</a></td>

</tr>
</table>
<?php 
}
 }

	}


?>

<?php
if (isset($_POST["painike3"])) {	
	$given=$_POST['yourname3']; 
	

	$sql=mysql_query("SELECT * FROM Customer WHERE c_name LIKE '$given%'");
			if(mysql_num_rows($sql)){
				while($rs=mysql_fetch_array($sql)){
     				$id=$rs['id'];
 


 ?>
		<table align="center" width="60%">
<tr>	
		<td><u><b>Company Name</b></u></td> 
		<td><u><b>Domain</b></u></td>
		<td><u><b>Income Last Year</b></u></td>
		<td><u><b>Income This Year</b></u></td>

</tr>
<tr>
		<td><?php echo $rs['c_name']; ?></td>
		<td><?php echo $rs['c_domain']; ?></td>
		<td><?php echo $rs['income_year']; ?>  &euro;</td>
		<td><?php echo $rs['income_year2']; ?>  &euro;</td>
		<td><a href="details/?id=<?php echo $id;?>">Details</a></td>

</tr>
</table>
<?php 
}
 }

	}


?>



<?php
if (isset($_POST["painike5"])) {	
	$given=$_POST['yourname5']; 
	

	$sql=mysql_query("SELECT * FROM Customer WHERE c_name_1 LIKE '$given%'");
			if(mysql_num_rows($sql)){
				while($rs=mysql_fetch_array($sql)){
     				$id=$rs['id'];
 


 ?>
		<table align="center" width="60%">
<tr>	
		<td><u><b>Company Name</b></u></td> 
		<td><u><b>Domain</b></u></td>
		<td><u><b>Contact Name</b></u></td>
		<td><u><b>Income Last Year</b></u></td>
		<td><u><b>Income This Year</b></u></td>

</tr>
<tr>
		<td><?php echo $rs['c_name']; ?></td>
		<td><?php echo $rs['c_domain']; ?></td>
		<td><?php echo $rs['c_name_1']; ?></td>
		<td><?php echo $rs['income_year']; ?>  &euro;</td>
		<td><?php echo $rs['income_year2']; ?>  &euro;</td>
		<td><a href="details/?id=<?php echo $id;?>">Details</a></td>

</tr>
</table>
<?php 
}
 }

	}


?>


<?php
if (isset($_POST["painike6"])) {	
	$given=$_POST['yourname6']; 
	

	$sql=mysql_query("SELECT * FROM Customer WHERE c_funnel LIKE '$given%'");
			if(mysql_num_rows($sql)){
				while($rs=mysql_fetch_array($sql)){
     				$id=$rs['id'];
 


 ?>
		<table align="center" width="60%">
<tr>	
		<td><u><b>Company Name</b></u></td> 
		<td><u><b>Domain</b></u></td>
		<td><u><b>Sales Funnel</b></u></td>
		<td><u><b>Income Last Year</b></u></td>
		<td><u><b>Income This Year</b></u></td>

</tr>
<tr>
		<td><?php echo $rs['c_name']; ?></td>
		<td><?php echo $rs['c_domain']; ?></td>
		<td><?php echo $rs['c_funnel']; ?></td>
		<td><?php echo $rs['income_year']; ?>  &euro;</td>
		<td><?php echo $rs['income_year2']; ?>  &euro;</td>
		<td><a href="details/?id=<?php echo $id;?>">Details</a></td>

</tr>
</table>
<?php 
}
 }

	}


?>







<?php
if (isset($_POST["painike4"])) {	
	$given=$_POST['yourname4']; 
	

	$sql=mysql_query("SELECT * FROM Customer WHERE c_domain LIKE '$given%'");
			if(mysql_num_rows($sql)){
				while($rs=mysql_fetch_array($sql)){
     				$id=$rs['id'];
 


 ?>
		<table align="center" width="60%">
<tr>	
		<td><u><b>Company Name</b></u></td>
		<td><u><b>Domain</b></u></td> 
		<td><u><b>Income Last Year</b></u></td>
		<td><u><b>Income This Year</b></u></td>

</tr>
<tr>
		<td><?php echo $rs['c_name']; ?></td>
		<td><?php echo $rs['c_domain']; ?></td>
		<td><?php echo $rs['income_year']; ?>  &euro;</td>
		<td><?php echo $rs['income_year2']; ?>  &euro;</td>
		<td><a href="details/?id=<?php echo $id;?>">Details</a></td>

</tr>
</table>
<?php 
}
 }

	}


?>



<?php
if (isset($_POST["painike8"])) {	
	$given=$_POST['yourname8']; 
	

	$sql=mysql_query("SELECT * FROM Customer");
			if(mysql_num_rows($sql)){
				while($rs=mysql_fetch_array($sql)){
     				$id=$rs['id'];
 


 ?>
		<table align="center" width="60%">
<tr>	
		<td><u><b>Company Name</b></u></td>
		<td><u><b>Domain</b></u></td> 
		<td><u><b>Income Last Year</b></u></td>
		<td><u><b>Income This Year</b></u></td>

</tr>
<tr>
		<td><?php echo $rs['c_name']; ?></td>
		<td><?php echo $rs['c_domain']; ?></td>
		<td><?php echo $rs['income_year']; ?>  &euro;</td>
		<td><?php echo $rs['income_year2']; ?>  &euro;</td>
		<td><a href="details/?id=<?php echo $id;?>">Details</a></td>

</tr>
</table>
<?php 
}
 }

	}


?>






	<br/>								
<form action="/calendar/">
    <input type="submit" value="Back" />
</form>									
									
									
									
									
									
    

</html>


<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php /* edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); */?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>


