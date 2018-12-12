<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
</script>
<head><meta http-equiv="content-type" content="text/html; charset=utf-8"></head>
 <script type="text/javascript">
$(function() {
  $( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
});       
   

    $(function() {
        $('#c_funnel').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });   


$(document).ready(function(){
    $('.button5').click(function(){
        $('#income').toggle();
    });
});

</script>
<style>
html { overflow-y: scroll; }
body { position: absolute; }


.button5 {
    background-color: #073d93; 
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 8px;
    margin: 4px 2px;
    cursor: pointer; 
border-radius:50%;}


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

  <date-util format="yyyy/mm/dd"></date-util>
<?php

/*
Template Name: salescon_details
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

<html>
<body>
<?php
if (isset($_GET['id'])){
	$id=$_GET['id'];
}else{
	$id=$_POST['id'];
}

include ("connect.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST['save'])){
	$c_name=$_POST['c_name'];
	$c_name2=$_POST['c_name2'];
	$c_businesscode=$_POST['c_businesscode'];
	$c_address=$_POST['c_address'];
	$c_postal_code=$_POST['c_postal_code'];
	$c_city=$_POST['c_city'];
	$c_country=$_POST['c_country'];
	$c_income=$_POST['c_income'];
	$c_phone=$_POST['c_phone'];
	$c_email=$_POST['c_email'];
	$c_www=$_POST['c_www'];
	$c_domain=$_POST['c_domain'];
	$company_info=$_POST['company_info'];
	$c_title_1=$_POST['c_title_1'];
	$c_name_1=$_POST['c_name_1'];
	$c_phone_1=$_POST['c_phone_1'];
	$c_email_1=$_POST['c_email_1'];
	$c_info1=$_POST['c_info1'];
	$c_title_2=$_POST['c_title_2'];
	$c_name_2=$_POST['c_name_2'];
	$c_phone_2=$_POST['c_phone_2'];
	$c_email_2=$_POST['c_email_2'];
	$c_info2=$_POST['c_info2'];
	$c_title_3=$_POST['c_title_3'];
	$c_name_3=$_POST['c_name_3'];
	$c_phone_3=$_POST['c_phone_3'];
	$c_email_3=$_POST['c_email_3'];
	$c_info3=$_POST['c_info3'];
	$c_title_4=$_POST['c_title_4'];
	$c_name_4=$_POST['c_name_4'];
	$c_phone_4=$_POST['c_phone_4'];
	$c_email_4=$_POST['c_email_4'];
	$c_info4=$_POST['c_info4'];
	$c_funnel=$_POST['c_funnel'];
	$sales_person=$_POST['sales_person'];
	$next_date=$_POST['next_date'];
	$c_flagged=$_POST['c_flagged'];
	$c_newsletter=$_POST['c_newsletter'];
	$c_status=$_POST['c_status'];
	$call_email=$_POST['call_email'];
	$follow=$_POST['follow_up'];
	$offer_size=$_POST['offer_size'];
	$call_again=$_POST['call_again'];
	$c_role=$_POST['c_role'];
	$next_step=$_POST['next_step'];
	$event_category=$_POST['event_category'];
	$r1_1=$_POST['r1_1'];
	$r1_2=$_POST['r1_2'];
	$r1_3=$_POST['r1_3'];
	$r1_4=$_POST['r1_4'];
	$r2_1=$_POST['r2_1'];
	$r2_2=$_POST['r2_2'];
	$r2_3=$_POST['r2_3'];
	$r2_4=$_POST['r2_4'];
	$r3_1=$_POST['r3_1'];
	$r3_2=$_POST['r3_2'];
	$r3_3=$_POST['r3_3'];
	$r3_4=$_POST['r3_4'];
	$r4_1=$_POST['r4_1'];
	$r4_2=$_POST['r4_2'];
	$r4_3=$_POST['r4_3'];
	$r4_4=$_POST['r4_4'];
	$r5_1=$_POST['r5_1'];
	$r5_2=$_POST['r5_2'];
	$r5_3=$_POST['r5_3'];
	$r5_4=$_POST['r5_4'];
	$r6_1=$_POST['r6_1'];
	$r6_2=$_POST['r6_2'];
	$r6_3=$_POST['r6_3'];
	$r6_4=$_POST['r6_4'];
	$r7_1=$_POST['r7_1'];
	$r7_2=$_POST['r7_2'];
	$r7_3=$_POST['r7_3'];
	$r7_4=$_POST['r7_4'];
	$r8_1=$_POST['r8_1'];
	$r8_2=$_POST['r8_2'];
	$r8_3=$_POST['r8_3'];
	$r8_4=$_POST['r8_4'];
	
	if ($c_status == "called" && ($next_date=="0000-00-00" || $next_date=="")){
		echo "Status 'called' requires date value in 'next contact' -field";
		?><br><input type="button" value="Back" onClick="history.go(-1);return true;"><?php
		die();
	}

	if ($c_status == "meeting" && ($next_date=="0000-00-00" || $next_date=="")){
                echo "Status 'meeting' requires date value in 'next contact' -field";
		?><br><input type="button" value="Back" onClick="history.go(-1);return true;"><?php
		die();
        }

	$query="
UPDATE crm SET c_name=\"$c_name\", c_name2=\"$c_name2\", c_businesscode=\"$c_businesscode\", c_address=\"$c_address\", c_postal_code=\"$c_postal_code\", c_city=\"$c_city\", c_country=\"$c_country\",income_year2=\"$c_income\", c_phone=\"$c_phone\", c_email=\"$c_email\", c_www=\"$c_www\", c_domain=\"$c_domain\", company_info=\"$company_info\", c_title_1=\"$c_title_1\", c_name_1=\"$c_name_1\", c_phone_1=\"$c_phone_1\", c_email_1=\"$c_email_1\", c_info1=\"$c_info1\", c_title_2=\"$c_title_2\", c_name_2=\"$c_name_2\", c_phone_2=\"$c_phone_2\", c_email_2=\"$c_email_2\", c_info2=\"$c_info2\", c_title_3=\"$c_title_3\", c_name_3=\"$c_name_3\", c_phone_3=\"$c_phone_3\", c_email_3=\"$c_email_3\", c_info3=\"$c_info3\", c_title_4=\"$c_title_4\", c_name_4=\"$c_name_4\", c_phone_4=\"$c_phone_4\", c_email_4=\"$c_email_4\", c_info4=\"$c_info4\", c_status=\"$c_status\", sales_person=\"$sales_person\", next_date=\"$next_date\", c_flagged=\"$c_flagged\", c_newsletter=\"$c_newsletter\",c_funnel=\"$c_funnel\",call_email=\"$call_email\", call_again=\"$call_again\",offer_size=\"$offer_size\",follow_up=\"$follow\",role=\"$c_role\", r1_1=\"$r1_1\", r1_2=\"$r1_2\", r1_3=\"$r1_3\", r1_4=\"$r1_4\", r2_1=\"$r2_1\", r2_2=\"$r2_2\", r2_3=\"$r2_3\", r2_4=\"$r2_4\", r3_1=\"$r3_1\", r3_2=\"$r3_2\", r3_3=\"$r3_3\", r3_4=\"$r3_4\", r4_1=\"$r4_1\", r4_2=\"$r4_2\", r4_3=\"$r4_3\", r4_4=\"$r4_4\", r5_1=\"$r5_1\", r5_2=\"$r5_2\", r5_3=\"$r5_3\", r5_4=\"$r5_4\", r6_1=\"$r6_1\", r6_2=\"$r6_2\", r6_3=\"$r6_3\", r6_4=\"$r6_4\", r7_1=\"$r7_1\", r7_2=\"$r7_2\", r7_3=\"$r7_3\", r7_4=\"$r7_4\", r8_1=\"$r8_1\", r8_2=\"$r8_2\", r8_3=\"$r8_3\", r8_4=\"$r8_4\" WHERE id=$id;";
	
$result=mysql_query($query);
$calendarId=1;
$endDate="0000-00-00";
$repeat="no-repeat";
$repeat2=1;
$month=1;
$year_month=1;
$published=1;

include 'connect.php';
$sql = "INSERT INTO spidercalendar_event SET calendar=1, date=\"$next_date\", title=\"$c_funnel\", category=\"$event_category\", repeat_method='no_repeat', published=1, text_for_date=\"$next_step\", c_id=\"$id\";";
$result=mysql_query($sql);
echo $sql;
if ($sql){

    echo "<h1>Success</h1>";
}

else{
    echo "Error: " . mysql_error();
    }
	?>
	<div style="overflow-x:auto;">
	<table>
	<tr><td colspan=2>UPDATED</td></tr>
	<tr><td>
	<input type="button" value="Back" onClick="history.go(-1);return true;">
 	<input type="button" value="List" onClick="location.href=('/portal/salescon')">
	</td></tr></table>
<?php
} else {
	$query="
	SELECT * FROM crm WHERE id=$id";
	$row=mysql_fetch_row(mysql_query($query));
	if ($row){
	?>
	<form method="post" action="<?php echo get_permalink(); ?>">
	<input type="hidden" name="id" value="<?php echo $id?>">
	<table width="100%">
	<tr><td style="width=:150px">Company:</td><td><input type="text" name="c_name"  value="<?php echo $row[1]?>"></td>
	<td>Phone:</td><td><input type="text" name="c_phone" value="<?php echo $row[8]?>"></td></tr>
	<tr><td>Public Name:</td><td><input type="text" name="c_name2" value="<?php echo $row[2]?>"></td>
	<td>Email:</td><td><input type="text" name="c_email" value="<?php echo $row[9]?>"></td></tr>
	<tr><td>Domain:</td><td><select name="c_domain"><option value="<?php echo $row[11]?>"><?php echo $row[11]?></option>
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
	</select></td><td>WWW:</td><td><input type="text" name="c_www" value="<?php echo $row[10]?>"></td></tr>
	<tr><td>Business Code:</td><td><input type="text" name="c_businesscode" value="<?php echo $row[3]?>"></td><td></td><td></td></tr>
	<tr><td>Address:</td><td><input type="text" name="c_address" value="<?php echo $row[4]?>"></td>
	<td>Postal Code:</td><td><input type="text" name="c_postal_code" value="<?php echo $row[5]?>"></td></tr>
	<tr><td>City:</td><td><input type="text" name="c_city" value="<?php echo $row[6]?>"></td>
	<td>Country:</td><td><input type="text" name="c_country" value="<?php echo $row[7]?>"></td></tr>	
	<tr><td>Info:</td><td colspan="3"><textarea name="company_info"><?php echo $row[12]?></textarea></td></tr>
	<tr><td colspan=4><hr><b><h3>Income</h3></b></td></tr>
	<tr><td>This Year</td><td>Last Year</td><td>Next Year</td><td>Montly</td></tr>
	<div id="income">
	<tr>
	<td><input type="text" name="c_income" value="<?php echo $row[76]?>"></td>
	<td><input type="text" name="c_last" value="<?php echo $row[75]?>"></td>
	<td><input type="text" name="c_next" value=""></td>
	<td><input type="text" name="c_monthly" value=""></td>
	</tr>
	</div>
	<tr><td colspan=4><hr><h3>Contact Info</h3></button></td></tr>
	<tr><td>Title</td><td>Name</td><td>Phone</td><td>Email</td><td>Info:</td></tr>
	<tr>
	<td><input type="text" name="c_title_1" value="<?php echo $row[13]?>"></td>
	<td><input type="text" name="c_name_1" value="<?php echo $row[14]?>"></td>
	<td><input type="text" name="c_phone_1" value="<?php echo $row[15]?>"></td>
	<td><input type="text" name="c_email_1" value="<?php echo $row[16]?>"></td>
	<td><textarea name="c_info1"><?php echo $row[17]?></textarea></td>

	</tr>
        <tr>
        <td><input type="text" name="c_title_2" value="<?php echo $row[18]?>"></td>
        <td><input type="text" name="c_name_2" value="<?php echo $row[19]?>"></td>
        <td><input type="text" name="c_phone_2" value="<?php echo $row[20]?>"></td>
        <td><input type="text" name="c_email_2" value="<?php echo $row[21]?>"></td>
	<td><textarea name="c_info2"><?php echo $row[22]?></textarea></td>

        </tr>
        <tr>
        <td><input type="text" name="c_title_3" value="<?php echo $row[23]?>"></td>
        <td><input type="text" name="c_name_3" value="<?php echo $row[24]?>"></td>
        <td><input type="text" name="c_phone_3" value="<?php echo $row[25]?>"></td>
        <td><input type="text" name="c_email_3" value="<?php echo $row[26]?>"></td>
	<td><textarea name="c_info3"><?php echo $row[27]?></textarea></td>

        </tr>
        <tr>
        <td><input type="text" name="c_title_4" value="<?php echo $row[28]?>"></td>
        <td><input type="text" name="c_name_4" value="<?php echo $row[29]?>"></td>
        <td><input type="text" name="c_phone_4" value="<?php echo $row[30]?>"></td>
        <td><input type="text" name="c_email_4" value="<?php echo $row[31]?>"></td>
	<td><textarea name="c_info4"><?php echo $row[32]?></textarea></td>

        </tr>
</table>


<table>
	<tr><td colspan=4><hr><h3>Case Status</h3></td></tr>
	<tr><td>Sales Funnel:</td><td><input type="text" name="c_funnel" value="<?php echo $row[71]?>" READONLY></td><td></td><td></td></tr>
	<tr><td>Sales Funnel </td><td><select name="c_funnel" id="c_funnel">
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
	</td><td> </td><td>
</td>
</tr>





	<tr><td>Sales Person:</td><td><input type="text" name="sales_person" value="<?php echo $row[35]?>"></td><td></td><td></td></tr>
	<tr><td>Next Contact (YYYY-MM-DD):</td><td><input type="text" name="next_date" id="next_date" class="datepicker" value="<?php echo $row[36]?>"></td><td></td><td></td></tr>
	<tr><td>Newsletter</td><td><input type="checkbox" name="c_newsletter" <?php if($row[36]){echo "CHECKED";}?>></td><td></td><td></td></tr>
	<tr><td>Flag</td><td><input type="checkbox" name="c_flagged" <?php if($row[35]){echo "CHECKED";}?>></td><td></td><td></td></tr>
	<tr><td>Status:</td><td><select name="c_status" id="c_status">
	<option value="<?php echo $row[34]?>">Select status</option>
	<option value="Focus">Focus</option>
	<option value="Hot">Hot</option>
	<option value="Warm">Warm</option>
	<option value="Cold">Cold</option>
	<option value="Killed">Killed</option>
	</select> </td></tr>


	<tr><td><div id="offer" class="colors" style="display:none">Offer Size € <input type="text" name="offer_size"></div> </td></tr>
	<tr><td><div id="meeting" class="colors" style="display:none">Follow-up <input type="text" class="datepicker" id="follow_up" name="follow_up"></div> </td></tr>
	<tr><td><div id="contact" class="colors" style="display:none">Call/Email <input type="text" class="datepicker" id="call_email" name="call_email"></div> </td></tr>
	<tr><td><div id="contact_again" class="colors" style="display:none">Call Again <input type="text" class="datepicker" name="call_again"></div> </td></tr>
	<tr><td><div id="sow" class="colors" style="display:none">Contract<select name="c_contract" id="c_contract">
	<option value="signed">Signed</option>
	<option value="follow">Follow-up</option>
	</select></div></td></tr>

	<tr><td>Role:</td><td><select name="c_role" id="c_role">
	<option value="Customer">Customer</option>
	<option value="Partner">Partner</option>
		</select> </td></tr>

	
	<tr><td>Next Step:</td><td><textarea name="next_step"></textarea></td></tr>

	<tr><td>Category:</td><td><select name="event_category" id="event_category">
	<option value=""></option>
	<option value="1">Contact</option>
	<option value="2">Arrange Meeting</option>
	<option value="3">Solution Proposal</option>
	<option value="4">Make Offer</option>
	<option value="5">Follow-up</option>
		</select> </td></tr>

	
	


</table>
 

<table>


	<tr><td colspan=4><hr><h3>Activities</h3></td></tr>	
	<tr><td>Author</td><td>Date</td><td>Next Contact</td><td>Info</td></tr>
	<tr>
	<td><input type="text" name="r1_1" value="<?php echo $row[37]?>"></td>
	<td><input type="text" class="datepicker" name="r1_2" value="<?php echo $row[38]?>"></td>
	<td><input type="text" class="datepicker" name="r1_3" value="<?php echo $row[39]?>"></td>
	<td><textarea name="r1_4"><?php echo $row[40]?></textarea></td>
	</tr>
        <tr>
        <td><input type="text" name="r2_1" value="<?php echo $row[41]?>"></td>
        <td><input type="text" class="datepicker" name="r2_2" value="<?php echo $row[42]?>"></td>
        <td><input type="text" class="datepicker" name="r2_3" value="<?php echo $row[43]?>"></td>
	<td><textarea name="r2_4"><?php echo $row[44]?></textarea></td>
        </tr>        
	<tr>
        <td><input type="text" name="r3_1" value="<?php echo $row[45]?>"></td>
        <td><input type="text" class="datepicker" name="r3_2" value="<?php echo $row[46]?>"></td>
        <td><input type="text" class="datepicker" name="r3_3" value="<?php echo $row[47]?>"></td>
	<td><textarea name="r3_4"><?php echo $row[48]?></textarea></td>
        </tr>        
	<tr>
        <td><input type="text" name="r4_1" value="<?php echo $row[49]?>"></td>
        <td><input type="text" class="datepicker" name="r4_2" value="<?php echo $row[50]?>"></td>
        <td><input type="text" class="datepicker" name="r4_3" value="<?php echo $row[51]?>"></td>
	<td><textarea name="r4_4"><?php echo $row[52]?></textarea></td>
        </tr>        
	<tr>
        <td><input type="text" name="r5_1" value="<?php echo $row[53]?>"></td>
        <td><input type="text" class="datepicker" name="r5_2" value="<?php echo $row[54]?>"></td>
        <td><input type="text" class="datepicker" name="r5_3" value="<?php echo $row[55]?>"></td>
	<td><textarea name="r5_4"><?php echo $row[56]?></textarea></td>
        </tr>        
	<tr>
        <td><input type="text" name="r6_1" value="<?php echo $row[57]?>"></td>
        <td><input type="text" class="datepicker" name="r6_2" value="<?php echo $row[58]?>"></td>
        <td><input type="text" class="datepicker" name="r6_3" value="<?php echo $row[59]?>"></td>
	<td><textarea name="r6_4"><?php echo $row[60]?></textarea></td>
        </tr>        
	<tr>
        <td><input type="text" name="r7_1" value="<?php echo $row[61]?>"></td>
        <td><input type="text" class="datepicker" name="r7_2" value="<?php echo $row[62]?>"></td>
        <td><input type="text" class="datepicker" name="r7_3" value="<?php echo $row[63]?>"></td>
	<td><textarea name="r7_4"><?php echo $row[64]?></textarea></td>
        </tr>        
	<tr>
        <td><input type="text" name="r8_1" value="<?php echo $row[65]?>"></td>
        <td><input type="text" class="datepicker" name="r8_2" value="<?php echo $row[66]?>"></td>
        <td><input type="text" class="datepicker" name="r8_3" value="<?php echo $row[67]?>"></td>
	<td><textarea name="r8_4"><?php echo $row[67]?></textarea></td>
        </tr>
	<tr><td><input type='submit' value='Save' name='save'><input type='reset' value='Reset' name='reset'></td><td></td><td></td><td></td></tr>
	</table>
</div>
	<?php
	}
}
?>
</table>
</form>


	<br/>								
<form action="/calendar/">
    <input type="submit" value="Back" />
</form>		
</body>
</html>



						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
