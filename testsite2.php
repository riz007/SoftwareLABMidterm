<?php
	
        //make connection
        mysql_connect('localhost','root','Qwerty999');
        //select db
        mysql_select_db('employees');
    
	$department = $_POST['department'];	
?>
<html>
<body>

<table width = "600" border = "1" cellpadding = "1" cellspacing = "1">
	<tr>
		<th>Employee No.</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Hire date</th>   
	</tr>

<?php 
$sql2 = "SELECT employees.emp_no, employees.first_name,employees.last_name, employees.gender, employees.hire_date FROM employees INNER JOIN dept_manager ON 	employees.emp_no=dept_manager.emp_no WHERE dept_manager.dept_no='$department'";
        
       $records2 = mysql_query($sql2);
            
            
            while($info = mysql_fetch_assoc($records2)){
                
                echo "<tr>";
                
                echo "<td>".$info['emp_no']."</td>";
                echo "<td>".$info['first_name']."</td>";
                echo "<td>".$info['last_name']."</td>";
                echo "<td>".$info['gender']."</td>";
                echo "<td>".$info['hire_date']."</td>";
                echo "</tr>";
                
                
            }
            
                
            ?>
        
        </table>
<script type="text/javascript">
	
$("tr").not(':first').hover(
  function () {
    $(this).css("background","yellow");
  }, 
  function () {
    $(this).css("background","");
  }
);
	
</script>
</body>
</html>
