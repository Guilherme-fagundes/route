### RUTE
<p>This class performs the route function</p>

#### Instalation
```bash
composer require coffeebreaks/route
```

### Config.php

```php
define('HOME', ""); // Base URI
define('THEME', ''); // Your theme
define('INCLUDE_PATH', 'themes'.DIRECTORY_SEPARATOR.THEME);
```


### .htaccess

```.htaccess
RewriteEngine On

Options All -indexes

RewriteCond %{SCRIPT_FILENAME} !-d
RewriteCond %{SCRIPT_FILENAME} !-f
RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]
```