<?php 
define('USER1', 'root');
define('PASS1', '');
define('DSN1', 'mysql:host=localhost;dbname=nv_la_course');
try {
 $dbb = new PDO(DSN1, USER1, PASS1);
 

} catch (PDOException $e) {
 print "Erreur ! : " . $e->getMessage() . "<br/>";
 die();
}

?>