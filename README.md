Wrapper API Transantiago for PHP
================

Installation
------------

### Install with Composer
If you're using [Composer](https://github.com/composer/composer) to manage
dependencies, you can add Transantiago with it.

    composer require pviojo/transantiago-api
    
or

    {
        "require": {
            "pviojo/transantiago-api": "*"
        }
    }



Documentation
-------------

    echo (Transantiago::recorrido("401")); //Devuelve la información del recorrido 401
    echo (Transantiago::predictor("PA345")); //Devuelve los próximos servicios en el paradero PA345
    echo (Transantiago::predictor("PA345", "401")); //Devuelve el proximo servicio 401 en el paradero PA345
    echo (Transantiago::paraderosCercanos(-33.4439997, -70.6503935)); //Devuelve los paraderos cercanos a la lat/lng enviada
  
Default return format is JSON, You can change it setting the format before requesting the information:

    Transantiago::$format = "JSON" //Set JSON format (default value)
    Transantiago::$format = "PHP" //Set PHP Object format
    
TODO
----

Check errors!

  
Contribute
----------

1. Check for open issues or open a new issue for a feature request or a bug
2. Fork [the repository][] on Github to start making your changes to the
    `master` branch (or branch off of it)
3. Write a test which shows that the bug was fixed or that the feature works as expected
4. Send a pull request and bug me until I merge it

[the repository]: https://github.com/pviojo/transantiago-api
