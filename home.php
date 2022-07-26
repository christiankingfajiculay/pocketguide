<?php
   include ('settings.php');
   $stmt = $pdo ->query('SELECT*FROM user_accounts');
   $rows = $stmt ->fetchAll();
   $count = $stmt ->rowCount();
   echo $count;

?>
<a href="logout.php">Logout</a>