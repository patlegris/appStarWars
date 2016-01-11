#!/usr/bin/env bash
USERNAME='root'
PASSWORD='root'
DBNAME='db_starwars'
HOST='localhost'

USER_USERNAME='tony'
USER_PASSWORD='tony'

MySQL=$(cat <<EOF
DROP DATABASE IF EXISTS $DBNAME;
CREATE DATABASE $DBNAME DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
DELETE FROM mysql.user WHERE user='$USER_USERNAME' and host='$USER_PASSWORD';
GRANT ALL PRIVILEGES ON $DBNAME.* to '$USER_USERNAME'@'$HOST' IDENTIFIED BY '$USER_PASSWORD' WITH GRANT OPTION;
EOF
)
echo $MySQL | mysql --user=$USERNAME --password=$PASSWORD

php  artisan migrate:refresh --seed

echo  { \"directory\": \"resources/assets/bower\" > ./.bowerrc

# bower install skeleton-scss
# npm install -g maildev