# Install apache2
#Install PHP
#Install mysql
#install SQLite3
apt-get install sqlite3 libsqlite3-dev
apt-get install php5-sqlite

# Install the required library to drop tables using artisan migrate
copmposer require doctrine/dbal