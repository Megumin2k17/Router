# Router

## 1. Create an object of the class:
`$route = new Router($routes);`

## 2. Add a route for specific method:

`$route->get('/path', 'script.php');`
or
`$route->post('/path', 'script.php');`
## 3. To start our router work use:
`$route->match();`
