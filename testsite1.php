<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
        //make connection
        mysql_connect('localhost','root','Qwerty999');
        //select db
        mysql_select_db('employees');

	$sql = "SELECT * FROM departments";
        
        
        
        $records = mysql_query($sql);
        
       
        ?>
<html>
<head>
        <meta charset="UTF-8">
	<title>Midterm Ja</title>
</head>
<body>
	/*
	
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("id2").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("id2").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","testsite2.php?q="+str,true);
  xmlhttp.send();
}

</script>
	
	
	*/
	
	<h1>Midterm Examinationnnn</h1>

        
	            
	<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" id="id2">   
        <select name="department" onchange="document.getElementById('id2').submit();">
	<!-- above line is submitter -->
	<?php 
		echo "<option>Select</option>";
	while ($departments = mysql_fetch_array($records))	
	{
    		echo "<option value=".$departments['dept_no'].">".$departments['dept_name']."</option>";
		#send dept_no, only show dept_name
	}

		echo "<td>".$departments['dept_no']."</td>";
	?>        
	</select>
	
	</form>



<?php
	include 'testsite2.php';
?>
