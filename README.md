# Router

Simple router. It doesn't work with GET and POST methods.

##How to use
Firstly, you need to create Router. In construct method you should pass the 404page filename.
 ```php
$router = new Router('error404.php');
```

After that, you need to add routes:

 ```php
$router->addRoutes([
    '/about' => "about.php",
    '/' => 'homepage.php',
]);
```

Then, all you need is run the Router:

```php
$router->route();
```




 
