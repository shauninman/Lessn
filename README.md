# Lessn is an extremely simple, personal URL shortener

[![CI](https://github.com/bueltge/Lessn/workflows/CI/badge.svg)](https://github.com/bueltge/Lessn/actions)

Written in PHP with MySQL and mod_rewrite. Maintained and enhanced in this repository by me.

![Lessn](/assets/lessn.png)

## Installation

1. Open `/lessn/-/config.php` in a plaintext editor, create a Lessn username and password, and enter your database connection details.
2. Upload the entire `/lessn/` directory to your server.
   For the shortest URLs, place it at the root of your site and rename to a single character.
   Example: `http://doma.in/x/`
3. Visit `http://doma.in/x/-/` to Lessn a new URL and grab the bookmarklets (the required database table is created automatically the first time you visit Lessn).
4. Visit `http://doma.in/x/` to see all Lessn URLs you've created.

## NOTE

If your Lessn'd URLs aren't working you probably didn't upload the `.htaccess` file. Enable "Show invisible files" in your FTP application.

Lessn is offered as-is, sans support and without warranty.
Copyright © since 2009 [Shaun Inman](https://shauninman.com/)
