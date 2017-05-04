# Lessn is an extremely simple, personal url shortener

Written in PHP with MySQL and mod_rewrite.

![Lessn](/assets/lessn.png)

## Installation

1. Open `/lessn/-/config.php` in a plaintext editor and
   create a Lessn username and password then enter your
   database connection details.
2. Upload the entire `/lessn/` directory to your server.
   For the shortest urls, place it at the root of your
   site and rename to a single character.
   Example: http://doma.in/x/
3. Visit http://doma.in/x/-/ to Lessn a new url and grab
   the bookmarklets (the required database table is created
   automatically the first time you visit Lessn).
4. Visit http://doma.in/x/ to see all Lessn urls you’ve created.

### NOTE:

If your Lessn'd urls aren't working you probably didn't
upload the `.htaccess` file. Enable "Show invisible files"
in your FTP application.

Lessn is offered as-is, sans support and without warranty.
Copyright © 2009 [Shaun Inman](http://shauninman.com/)
