# Swagger UI for ZF2
ZF2 module wrapping the default Swagger UI interface in a ZF2 module.

##Installation
The recommended way of installing Swagger UI for ZF2 is by using composer. Add `"kbrabrand/zf2-swagger-ui" : "dev-master"` to the require part of your composer.json file and do a `composer update` in order to download the dependency and generate autoloads.

Then add the module to the modules array in your application.config.php by adding `"SwaggerUI"`.

And lastly you will need to make the asset folder publicly accessible. This can be done in several ways, but for simplicty you could add a symlink like this;

`cd [ZF-app-root]/public && ln -s ../vendor/kbrabrand/zf2-swagger-ui/public swagger-ui`

##Configuration
There is one configurable option for the module. If you want Swagger UI to look for Swagger JSON somewhere other than /api/docs under the root of your ZF2 app, you can copy the swagger-ui.global.php.dist to your config/autoloads folder and set the docs-endpoint option to wherever you like.

##Usage
After adding the module to your application config you can access Swagger UI by going to /api/swagger.

## License
### Swagger UI templates, images and JS files
Copyright 2011-2013 Wordnik, Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at [apache.org/licenses/LICENSE-2.0](http://www.apache.org/licenses/LICENSE-2.0)

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

###Everything else
Copyright (c) Kristoffer Brabrand <kristoffer@brabrand.no>

Licensed under the MIT License
