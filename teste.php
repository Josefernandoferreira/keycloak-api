
<?php 

require __DIR__ . '/lib_keycloak_api/vendor/autoload.php';
use keycloak\lib_keycloak_api\Keycloak;

$hello = new Keycloak;
$hello->up();