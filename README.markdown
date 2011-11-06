PHP Template Service Provider for Silex
===========================================

Parameters
----------

* *phptmpl.lib_path* - Path to where PHP Template `lib` folder is located ( without trailing slash )
* *phptmpl.view_path* - Path to where PHP Template file folder is located ( without trailing slash )

Installation
------------ 
    git clone https://github.com/m92o/Silex-PhpTemplate.git

Registering
-----------
	use Provider\PhpTemplateServiceProvider\PhpTemplateServiceProvider;

    $app['autoloader']->registerNamespace('Provider', __DIR__);
	$app->register(new PhpTemplateServiceProvider(),
		array(
			'phptmpl.lib_path' => __DIR__.'/vendor/phptemplate',
			'phptmpl.view_path' => __DIR__.'/views',
		)
	);

Usage
-----
	echo $app->render('/index.tmpl', $data);
