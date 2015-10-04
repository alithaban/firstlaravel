# Install Curl
cd ~/
sudo apt-get install php5-curl

#Install Composer
curl -sS https://getcomposer.org/installer | sudo php

or 

php -r "readfile('http://getcomposer.org/installer');" | php

Then 

sudo mv composer.phar /usr/local/bin/composer

# Install Laravel
composer global require "laravel/installer=~1.1"

export PATH="~/.composer/vendor/bin:$PATH"

# Install apache2
#Install PHP
#Install mysql
#install SQLite3
apt-get install sqlite3 libsqlite3-dev
apt-get install php5-sqlite

# Install the required library to drop tables using artisan migrate
copmposer require doctrine/dbal

# Install Html
copmposer require illuminate/html



# Set the chmod for bootstrap and maybe storage
find app/storage -type d -exec chmod -vc 777 {} \;
find app/storage -type f -exec chmod -vc 777 {} \;