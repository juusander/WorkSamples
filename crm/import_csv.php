<?php
/*
Template Name: import_csv
*/
?>

<?php

include 'db_pdo.php';

if(isset($_POST['importSubmit'])){
	$given=$_POST['importDomain'];
    
    
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
           
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
           
            fgetcsv($csvFile);
            
            
            while(($line = fgetcsv($csvFile)) !== FALSE){
                
                $prevQuery = "SELECT id FROM crm WHERE c_email_1 = 'testimaili'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
                    
                    $db->query("UPDATE crm SET c_name = '".$line[0]."', c_city = '".$line[1]."', c_country = '".$line[2]."',c_name_1 = '".$line[4]."', c_title_1 = '".$line[3]."', company_info = '".$line[6]."' WHERE c_email_1 = '".$line[5]."'");
                } else {
			switch ($given) {
    case "theme":
        $db->query("INSERT INTO crm (c_name, c_city, c_title_1, c_name_1, c_email_1, c_phone_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."')");
	break;

    case "arena":
        $db->query("INSERT INTO crm (c_name, c_city, c_title_1, c_name_1, c_email_1, c_phone_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."')");
	break;

    case "resort":
        $db->query("INSERT INTO crm (c_name, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."')");
        break;

    case "sport":
        $db->query("INSERT INTO crm (c_name, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."')");
        break;

    case "business":
        $db->query("INSERT INTO crm (c_name, c_city, c_title_1, c_name_1, c_email_1, c_phone_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."')");
        break;

  case "partner":
        $db->query("INSERT INTO crm (c_name, c_city, c_title_1, c_name_1, c_email_1, c_phone_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."')");
        break;

  case "themeInt":
        $db->query("INSERT INTO crm (c_name, c_city, c_country, c_title_1, c_name_1, c_email_1, c_phone_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."')");
        break;

  case "resortInt":
        $db->query("INSERT INTO crm (c_name, c_country, c_city, c_title_1, c_name_1, c_phone_1, c_email_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."')");
        break;

  case "arenaInt":
        $db->query("INSERT INTO crm (c_name, c_city, c_country, c_title_1, c_name_1, c_email_1, c_phone_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."')");
        break;

  case "sportInt":
        $db->query("INSERT INTO crm (c_name, c_city, c_country, c_title_1, c_name_1, c_email_1, c_phone_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."')");
        break;

  case "businessInt":
        $db->query("INSERT INTO crm (c_name, c_city, c_country, c_title_1, c_name_1, c_email_1, c_phone_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."')");
        break;

  case "partnerInt":
        $db->query("INSERT INTO crm (c_name, c_city, c_country, c_title_1, c_name_1, c_email_1, c_phone_1, company_info) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$line[6]."','".$line[7]."')");
        break;





	default:
        echo "Cant find Domain";
}
                    					
															
	}
            }
            
            
            fclose($csvFile);
		echo "<h2>SUCCESS!</h2>";
		
		
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}


header("Location: /calendar/".$qstring); 
?>
<br/>								
<form action="/calendar/">
    <input type="submit" value="Back" />
</form>		
