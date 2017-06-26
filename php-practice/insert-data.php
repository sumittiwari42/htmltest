 <?php
  include 'connection.php';
 
  $sql = 'INSERT INTO employee '.
      '(emp_name,emp_address, emp_salary) '.
      'VALUES ( "guest", "XYZ", 2000)';

   mysql_select_db('test_php');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not create table: ' . mysql_error());
   }
   
   echo "Table employee created successfully\n";

?>