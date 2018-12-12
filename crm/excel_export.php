<?php
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=salescon_Report.xls");  
header("Pragma: no-cache");  
header("Expires: 0"); 
?>
<?php
/*
Template Name: export_excel
*/
?>


<?php  
require 'connect.php';
$given=$_POST['exportDomain'];
$given2=$_POST['exportFunnel'];

  switch ($given) {
    case "theme":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_domain LIKE '%theme%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Kohde" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Nimi" . "\t" . "Email" . "\t" . "Puhelin" . "\t" . "Next" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;

    case "arena":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1, c_phone_1, next_step FROM Customer WHERE c_domain LIKE '%arena%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Tapahtumapaikka" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Nimi" . "\t" . "Email" . "\t" . "Puhelin" . "\t" . "Next" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;

    case "resort":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1, c_phone_1, next_step FROM Customer WHERE c_domain LIKE '%resort%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Tapahtumapaikka" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Nimi" . "\t" . "Email" . "\t" . "Puhelin" . "\t" . "Next" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n";  
	break;

    case "sport":
       $setSql = "SELECT c_name, c_country, c_city, c_title_1, c_name_1, c_email_1, c_phone_1, next_step FROM Customer WHERE c_domain LIKE '%sport%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "Country" . "\t" . "Town" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "\t" . "Telephone" . "\t" . "Next" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;

    case "business":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, next_step FROM Customer WHERE c_domain LIKE '%business%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Kentän nimi" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Henkilö" . "\t" . "Puhelin" . "\t" . "Email" . "\t" . "2018" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;


case "partner":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, next_step FROM Customer WHERE c_domain LIKE '%partner%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Kentän nimi" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Henkilö" . "\t" . "Puhelin" . "\t" . "Email" . "\t" . "2018" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;



case "themeInt":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, next_step FROM Customer WHERE c_domain LIKE '%themeInt%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Kentän nimi" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Henkilö" . "\t" . "Puhelin" . "\t" . "Email" . "\t" . "2018" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;


case "resortInt":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, next_step FROM Customer WHERE c_domain LIKE '%resortInt%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Kentän nimi" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Henkilö" . "\t" . "Puhelin" . "\t" . "Email" . "\t" . "2018" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;



case "arenaInt":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, next_step FROM Customer WHERE c_domain LIKE '%business%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Kentän nimi" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Henkilö" . "\t" . "Puhelin" . "\t" . "Email" . "\t" . "2018" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;




case "sportInt":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, next_step FROM Customer WHERE c_domain LIKE '%sportInt%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Kentän nimi" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Henkilö" . "\t" . "Puhelin" . "\t" . "Email" . "\t" . "2018" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;



case "businessInt":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, next_step FROM Customer WHERE c_domain LIKE '%businessInt%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Kentän nimi" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Henkilö" . "\t" . "Puhelin" . "\t" . "Email" . "\t" . "2018" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;



case "parterInt":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, next_step FROM Customer WHERE c_domain LIKE '%partnerInt%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Kentän nimi" . "\t" . "Kaupunki" . "\t" . "Titteli" . "\t" . "Henkilö" . "\t" . "Puhelin" . "\t" . "Email" . "\t" . "2018" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;




	default:
        echo "";
}





// Export Funnel

switch ($given2) {
    case "Opportunity":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_funnel LIKE '%opportunity%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "City" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "Phone" . "\t" . "2018" . "\t";  
  
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;

     case "Contact":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_funnel LIKE '%contact%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "City" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "Phone" . "\t" . "2018" . "\t"; 
	
	$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;

     case "Contact_again":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_funnel LIKE '%contact_again%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "City" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "Phone" . "\t" . "2018" . "\t"; 
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n";  
	break;

    case "Arrange_meeting":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_funnel LIKE '%arrange_meeting%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "City" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "Phone" . "\t" . "2018" . "\t"; 
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;

    case "Meeting":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_funnel LIKE '%meeting%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "City" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "Phone" . "\t" . "2018" . "\t"; 
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;


 case "Proposal":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_funnel LIKE '%proposal%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "City" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "Phone" . "\t" . "2018" . "\t"; 
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;



 case "Offer":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_funnel LIKE '%offer%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "City" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "Phone" . "\t" . "2018" . "\t"; 
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;


 case "Sow":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_funnel LIKE '%sow%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "City" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "Phone" . "\t" . "2018" . "\t"; 
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;



 case "Deal":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_funnel LIKE '%deal%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "City" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "Phone" . "\t" . "2018" . "\t"; 
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;


 case "Follow-up":
        $setSql = "SELECT c_name, c_city, c_title_1, c_name_1, c_email_1,c_phone_1, next_step FROM Customer WHERE c_funnel LIKE '%follow-up%'";  
	$setRec = mysql_query($setSql);

	$columnHeader = '';  
	$columnHeader = "Company" . "\t" . "City" . "\t" . "Title" . "\t" . "Name" . "\t" . "Email" . "\t" . "Phone" . "\t" . "2018" . "\t"; 
$setData = '';  
  
while ($rec = mysql_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
	echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
	break;


	default:
        echo "";
}

                    					
															
  
    
//echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  