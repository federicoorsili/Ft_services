/usr/bin/mysql_install_db --user=root --datadir=/var/lib/mysql
#rc-service mariadb start 
#mysql < wordpress.sql
#rc-service mariadb stop
/usr/bin/mysqld --user=root --init_file=/init_file