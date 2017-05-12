define ('DBSERVER', 'localhost:3306');
define ('DBUSER', 'root');
define ('DBPASS','root');
define ('DBNAME','CSIT314');

mysql_connect(DBSERVER, DBUSER, DBPASS) or die (mysql_error());
mysql_select_database(DBNAME) or die (mysql_error());

