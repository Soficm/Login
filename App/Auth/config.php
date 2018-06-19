<?php

    return 

    array(
        "base_url" => "http://ec2-54-191-220-190.us-west-2.compute.amazonaws.com/login/hybridauth.php",

        "providers" => array(
            "Twitter" => array(
                "enabled" => true,
                "keys" => array (
                    "key" =>"QSDt3fPgxMQcSG8Tfl3L7v4dF",
                    "secret" => "YBDHyAHMFF2BZk36Mqh6qIK2kzYAH9wQOaz5RbRVzgnlyFzM3c"
                ),
                "includeEmail" => true
            ),
            "Facebook" => array(
                "enabled" => true,
                "keys" => array (
                    "id" =>"688969151288998",
                    "secret" => "9d995f896a36fcf439a33e67171ad395"
                ),
                "scope" => "email"
            ),
             "Google" => array(
                "enabled" => true,
                "keys" => array (
                    "id" =>"736576628934-0nag864ek9t36tpa4j1005eapp9qh95b.apps.googleusercontent.com",
                    "secret" => "bSJStk3a9DkgTqyH_o33KUXv"
                )
         )
     )
)

//Toda la configuración de las redes sociales, es decir todas las keys que proporcionan cada una de las redes sociales. Estos nos van a permitir autenticarnos con las diferentes APIS 

?>