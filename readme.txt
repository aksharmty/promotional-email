Requirement :
smtp enable hosting account
php5.6 and above.
mysql myphpadmin.
cronjob

Installation:
1.Upload all file in hosting server.
2.create database.
3.upload " database.sql " in myphpadmin.
4. modifiey " connect.php " as per your database details.
5. modifiey " emailsent.php " and " sentemail.php " 
6.set cron job 10minutes:
*/10	*	*	*	*	/usr/local/bin/php -q /home/USERNAME/public_html/test/sentemail.php

