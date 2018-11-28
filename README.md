vue-symfony
===========

A simple skeleton to start an application using vue.js + symfony

Usage
=====

Installation
------------

```
git clone https://github.com/DaedalusDev/vue-symfony.git
cd vue-symfony
composer install
cd front
npm install
```

Enjoy !

Vue basic functionality
-----------------------
- npm run serve :

  run a webpack devserver. You can easily proxy your ajax request by define `DEV_API_URL` in `front/.env.local`
- npm run build :

  it will build your production build (served by symfony via `src/ApiBundle/DefaultController.php`)

Symfony basic functionality
---------------------------

Your symfony backend is ready to play with this vendor
- FOSRestBundle
- JMSSerializer
