
<?php 

require __DIR__ . '/vendor/autoload.php';
use keycloak\lib_keycloak_api\Keycloak;

$hello = new Keycloak;
$hello->up();