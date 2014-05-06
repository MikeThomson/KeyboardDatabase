Keyboard Database
=======================

A simple application to help people find the keyboard that's right for them.

Installation
------------

1. Point your docroot at `/public`

2. In the main directory, run `php composer.phar install`. This will install
all the dependencies for the project

3. Copy `/config/autoload/local.php.dist` to `/config/autoload/local.php` and
fill out the settings according to your environment. You may also do the same
with `zenddevelopertools.local.php.dist` if you wish to have ZDT enabled.

4. In the root directory, run `php public/index.php orm:schema-tool:create`.
This will connect to the database and create the appropriate schema.
