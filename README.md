Installation

clone the repository for pull command availability:

git clone https://github.com/pamparam-lesson/modules project
cd project
composer global require "fxp/composer-asset-plugin:~1.0.0"
composer install

Init an environment:

php init

Fill your DB connection information in config/common-local.php and execute migrations:

php yii migrate

Sign up on site or create your first user manually:

php yii user/users/create

Init RBAC roles:

php yii rbac/init

Assign admin role to your user:

php yii roles/assign
