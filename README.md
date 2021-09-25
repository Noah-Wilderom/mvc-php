# MVC PHP
## _Model View Controller Framework_

MVC Framework met Nederlands commentaar

## Error
De error `Warning: Trying to access array offset on value of type null in C:\xampp\htdocs\MVCphp\app\libraries\Core.php on line 12`  komt door dat er geen URL in view kan worden gegeven omdat de URL standaard leeg is als je op de index pagina komt. 
(*Wordt nog naar gekeken*)

## Installatie

Pak het zip bestandje uit in je htdocs (XAMPP) en open het mapje met je code editor.

Volg de volgende stappen om de MVC in te stellen.

### public/.htaccess
Als je de mapnaam wil veranderen dan moet je dat ook aangeven in de .htacces bij **RewriteBase**.
```sh
<IfModule mod_rewrite.c>
    Options -Multiviews
    RewriteEngine On
    RewriteBase /MVCphp/public
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>
```

### Config (app/config/config.php)
### Database
Hier voer je je eigen database gegevens in.
```sh
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mvcphp');
```

### Config
Bij URLROOT voer je standaard URL in, bij WEBSITENAAM voer je de naam in van je website.
```sh
define('URLROOT', 'http://localhost/MVCphp');
define('WEBSITENAAM', 'MVC PHP');
```

## Contact
Email: wilderomnoah@gmail.com
discord: Giggy#1813

## License
Noah Wilderom
MIT