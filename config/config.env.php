<?php

/**
 * Environment Declaration
 *
 * This switch statement sets our environment. The environment is used primarily
 * in our custom config file setup. It is also used, however, in the front-end
 * index.php file and the back-end admin.php file to set the debug mode
 *
 * @package    Focus Lab Master Config
 * @version    2.2.0
 * @author     Focus Lab, LLC <dev@focuslabllc.com>
 */

if ( ! defined('ENV'))
{
	$production  = '';
	$release	 = '';
	$development = '';
	$local       = 'project.ddev.site';

	switch (strtolower($_SERVER['HTTP_HOST'])) {
		case $production:
			define('ENV', 'prod');
			define('ENV_FULL', 'Production');
			define('ENV_DEBUG', FALSE);
			define('ENV_DOMAIN', $production);
		break;

		case $release:
			define('ENV', 'release');
			define('ENV_FULL', 'release');
			define('ENV_DEBUG', FALSE);
			define('ENV_DOMAIN', $release);
		break;

		case $development:
			define('ENV', 'development');
			define('ENV_FULL', 'Development');
			define('ENV_DEBUG', FALSE);
			define('ENV_DOMAIN', $development);
		break;

		default:
			define('ENV', 'local');
			define('ENV_FULL', 'Local');
			define('ENV_DEBUG', TRUE);
			define('ENV_DOMAIN', $local);
		break;
	}
}

/* End of file config.env.php */
/* Location: ./config/config.env.php */
