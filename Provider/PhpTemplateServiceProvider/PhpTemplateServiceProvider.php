<?php
namespace Provider\PhpTemplateServiceProvider;

use Silex\ServiceProviderInterface;
use Silex\Application;

class PhpTemplateServiceProvider implements ServiceProviderInterface {

	public function register(Application $app) {
		require_once $app['phptmpl.lib_path'].'/PhpTemplate.php';
		$app['phptmpl'] = $app->share(function () use($app) {
			return new \PhpTemplate($app['phptmpl.view_path']);
		});
	}

}
?>