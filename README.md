# php-basic-login
Simple PHP Authentification. No database involved.


### Creating local server on Mac:
1. Download/install XAMPP
* Migrate to XAMPP in Applications folder in terminal
* `cd htdocs`
* `git clone https://github.com/baboyma/php-basic-login.git phplogin`
* Navigate to localhost/phplogin

To customize:
* Change httpd.conf in Applications/XAMPP/etc: #
# DocumentRoot: The directory out of which you will serve your
# documents. By default, all requests are taken from this directory, but
# symbolic links and aliases may be used to point to other locations.
#
DocumentRoot "/Applications/XAMPP/xamppfiles/htdocs"
<Directory "/Applications/XAMPP/xamppfiles/htdocs">
* Restart Apache in XAMPP
* Make sure files are in the htdocs folder.
* Navigate to localhost/phplogin
* to log out: localhost/phplogin/?action=exit


### Editing html
* Embed all body code w/i `<section>` div in main.php
* If need to include other .php files (or change the file location), edit the `include` call w/i index.php
* Add nav, footer to main index.php page, before/after the php chunk.
