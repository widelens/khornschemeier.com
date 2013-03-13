# Kevin Hornschemeier

I'm a software engineer generalist with a computer science background in C/C++, algorithms, and data structures, and over 10 years of full-stack web development experience. This is the code for my personal web site, [khornschemeier.com][].

## Technologies

1. HTML
1. CSS
1. LESS
1. Javascript
1. jQuery
1. PHP
1. MySQL
1. Apache
1. Git
1. Codeigniter Framework
1. Google Web Fonts
1. Twitter Bootstrap
1. Responsive Design

----------------------------------------

### Code Layout

1. **application/**
	Contains the config files, routes, controllers, models, views, and other libraries and helper files
1. **html/**
	Publicly accessible. Contains the css/less, images, js, index.php, and other miscellaneous files such as .htaccess, robots.txt, and Sitemap.xml
1. **system/**
	The Codeigniter framework files
	
----------------------------------------

### Working With the Code

####.htaccess
Most requests are directed to index.php for routing. Review the [.htaccess](html/.htaccess) file for specifics.

####Environments
In index.php there is a switch statement to determine which environment is being accessed (development, stage, production, etc). A case will need to be added for each environment. Once an environment has been added and named a folder in [config](application/config/) can be created to house any configuration overrides specific to that environment.

####Database
The configuration for the database is in [database.php](application/config/database.php). Create a database.php for each environment in its own folder, [development example](application/config/development/). The database password should be stored in secret/mysql which is part of the .gitignore file.

####Routes
Routes can be added/edited in [routes](application/config/routes.php).

####View / Templates
Take a look at [site.php](application/controllers/site.php) for examples. The templates for [head.php](application/views/templates/head.php) and [foot](application/views/templates/foot.php) should be included on every page to set up the basic HTML wrapper and include the necessary css and js files. The home page has its own template under [home.php](application/views/templates/home.php) that pulls in the head.php and foot.php files. Interior pages all use the same template under [interior.php](application/views/templates/interior.php) which pulls in an additional [interior-header](application/views/templates/interior-header.php) file and will need additional parameters passed in to use it - [example](application/controllers/site.php#L31).

####CSS / LESS
The LESS files are in html/less/ and are use for all CSS markup. There is a route specified for any .less files in this folder to get dynamically compiled via PHP and a CSS file is returned - [example](application/controllers/site.php#L17). To view the generated CSS just browse to the link, [example][http://khornschemeier.com/less/global.less].

####Javascript
jQuery is included via Google's CDN. There is a global javascript object under [khornschemeier.js](html/js/khornschemeier.js) to help organize the javascript bindings and methods for the entire site. In [foot.php](applications/views/templates/foot.php) you will find a `$(document).ready()` set up. There is also a `$js_includes` variable in the foot.php where you can pass in any extra script tags to include javascript for specific pages. There is also a `$js` variable where you can pass in page-specific javascript to be run. Ideally in the controller you would load a new template into the `$js` variable where the template contains all the page-specific javascript.

####Responsive Design
The site is built using Twitter Bootstrap and responsive design principles to give the user a fast and pleasant experience no matter which device they are using. The site should work well from a potrait mobile phone all the way up to a very large desktop.