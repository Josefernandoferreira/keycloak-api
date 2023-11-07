
<?php 

require __DIR__ . '/vendor/autoload.php';
use keycloak_lib\lib_keycloak_api\Keycloak;

$hello = new Keycloak;
$hello->up();