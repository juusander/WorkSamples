<?php
/*
Template Name: calendar
*/
?>

<style>
.parent {
    width: 100%;
}
.parent > .first {
    width: 320px;
    float: left;
   
}
.parent > .last {
    width: auto;
    float: right;
    text-align:left
}

</style>

<style>


input[type=text] {
    width: 180px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
<div class="parent">
<div class="first" style="margin-left:40px;">
<table>
<h1>Options</h1>
<tr>
<td><form action="/add_sales/">
    <input type="submit" value="Add New" /> 
</form></td></tr>
<tr><td><br/></td></tr>

<tr>
<td>

<form action="details/?id=$id">
<input type="submit" value="Go to Details" />
	<?php include 'connect.php';

			$sql=mysql_query("SELECT id, c_name FROM Customer ORDER BY id DESC");
			if(mysql_num_rows($sql)){
				$select= '<select class="chosen" id="id" name="id">';
				while($rs=mysql_fetch_array($sql)){
     				 $select.='<option value="'.$rs['id'].'">'.$rs['c_name'].'</option>';
  }
}
$select.='</select>';

$id = $_POST['id'];

echo $select; ?>
    <script type="text/javascript">
$(".chosen").chosen();
</script>

</form>
</td></tr>

<tr><td><form action=/show/" method="post">
<input type="submit" name="painike8" value="List All"/>	
</form></td></tr>


<tr><td><form action="/show/" method="post">
<input type="submit" name="painike" value="Less than"/>	
 <input type="text" name="yourname" />
 &euro;
    
</form></td></tr>

<tr><td><form action="/show/" method="post">
<input type="submit" name="painike2" value="More than"/>	
 <input type="text" name="yourname2" />
 &euro;
    
</form></td></tr>

<tr><td><form action="/show/" method="post">
<input type="submit" name="painike3" value="Search By Name"/>	
 <input type="text" name="yourname3" />
 
    
</form></td></tr>


<tr><td><form action="/show/" method="post">
<input type="submit" name="painike5" value="Search By Contact"/>	
 <input type="text" name="yourname5" />
 
    
</form></td></tr>


<tr><td><form action="/show/" method="post">
<input type="submit" name="painike6" value="Search By Funnel"/>	
 <select name="yourname6" id="yourname6"><option value=""></option>
	<option value="Opportunity">Opportunity</option>
	<option value="Contact">Contact</option>
	<option value="Contact_again">Contact again</option>
	<option value="Arrange_meeting">Arrange Meeting</option>
	<option value="Meeting">Meeting</option>
	<option value="Proposal">Solution Proposal</option>
	<option value="Offer">Offer</option>
	<option value="Sow">Sow</option>
	<option value="Deal">Deal</option>
	<option value="Follow-up">Follow-up</option>
	</select>

 
    
</form></td></tr>





<tr><td><form action="/show/" method="post">
<input type="submit" name="painike4" value="Search by Domain" />
	<select name="yourname4"><option value=""></option>
	<option value="event">Event</option>
	<option value="arena">Arena</option>
	<option value="sport">Sport</option>
	<option value="theme">Theme Park</option>
	<option value="resort">Resort</option>
	<option value="partner">Partner</option>
	<option value="themeInt">Theme Park Int.</option>
	<option value="resortInt">Resort Int. </option>
	<option value="arenaint">Arena Int.</option>
	<option value="sportInt">Sport Int.</option>
	<option value="businessInt">Business Int.</option>
	<option value="partnerInt">Partner Int.</option>

	</select>
    
</form></td></tr>
<tr><td>
<h2><u>Import</u></h2>
	
<form action="/import/" method="post" enctype="multipart/form-data" id="importFrm">
<select name="importDomain"><option value=""></option>
	<option value="theme">Theme Park</option>
	<option value="resort">Resort</option>
	<option value="arena">Arena</option>
	<option value="sport">Sport</option>
	<option value="business">Business</option>
	<option value="partner">Partner</option>
	<option value="themeInt">Theme Park Int.</option>
	<option value="resortInt">Resort Int. </option>
	<option value="arenaint">Arena Int.</option>
	<option value="sportInt">Sport Int.</option>
	<option value="businessInt">Business Int.</option>
	<option value="partnerInt">Partner Int.</option>

	</select>
	<br/>
                <input type="file" name="file" />
				<br/>
                <input type="submit" name="importSubmit" value="Import Csv to DB">
</form> 

</td></tr>

<tr><td>
<h2><u>Export by Domain</u></h2>
<br/>
<form action="/export/" method="post">
<select name="exportDomain"><option value=""></option>
	<option value="theme">Theme Park</option>
	<option value="resort">Resort</option>
	<option value="arena">Arena</option>
	<option value="sport">Sport</option>
	<option value="business">Business</option>
	<option value="partner">Partner</option>
	<option value="themeInt">Theme Park Int.</option>
	<option value="resortInt">Resort Int. </option>
	<option value="arenaint">Arena Int.</option>
	<option value="sportInt">Sport Int.</option>
	<option value="businessInt">Business Int.</option>
	<option value="partnerInt">Partner Int.</option>
	</select>
	<br/>

<input type="submit" value="Export DB to Excel"/>
</form>


</tr></td> 

<tr><td>
<h2><u>Export by Funnel</u></h2>
<br/>
<form action="/export/" method="post">

<select name="exportFunnel" id="exportFunnel"><option value=""></option>
	<option value="Opportunity">Opportunity</option>
	<option value="Contact">Contact</option>
	<option value="Contact_again">Contact again</option>
	<option value="Arrange_meeting">Arrange Meeting</option>
	<option value="Meeting">Meeting</option>
	<option value="Proposal">Solution Proposal</option>
	<option value="Offer">Offer</option>
	<option value="Sow">Sow</option>
	<option value="Deal">Deal</option>
	<option value="Follow-up">Follow-up</option>
	</select>

<br/>

<input type="submit" value="Export DB to Excel"/>

</tr></td>

</table>
</div>
<div class="last" style="margin-right:60px;">
<?php echo "<h1>All Events</h1>";

echo do_shortcode( '[Spider_Calendar id="1" theme="13" default="month" select="month,list,week,day,"]' ); 

?>

<br/><br/>

<p> <b>C</b>= Contact, <b>AM</b>= Arrange Meeting, <b>Make SP</b>= Make Solution Proposal, <b>FO</b>= Follow-up, <b>MO</b>= Make Offer


</div>

</div>

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


