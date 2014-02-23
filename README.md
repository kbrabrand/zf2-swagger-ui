# Swagger UI for ZF2
ZF2 module wrapping the default Swagger UI interface in a ZF2 module.

##Installation
The recommended way of installing Swagger UI for ZF2 is by using composer. Add `"kbrabrand/zf2-swagger-ui" : "dev-master"` to the require part of your composer.json file and do a `composer update` in order to download the dependency and generate autoloads.

Then add the module to the modules array in your application.config.php by adding `"SwaggerUI"`.

##Configuration
There is one configurable option for the module. If you want Swagger UI to look for Swagger JSON somewhere other than /api/docs under the root of your ZF2 app, you can copy the swagger-ui.global.php.dist to your config/autoloads folder and set the docs-endpoint option to wherever you like.

##Usage
After adding the module to your application config you can access Swagger UI by going to /api/swagger.

## License
Copyright (c) Kristoffer Brabrand <kristoffer@brabrand.no>

Licensed under the MIT License
