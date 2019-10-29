<?php

namespace SmartEmailing\v3\Request\Ping;

use SmartEmailing\v3\Request\AbstractRequest;

/**
 * Class Ping
 */
class Ping extends AbstractRequest
{

	/**
	 * @return string
	 */
    protected function endpoint()
    {
        return 'ping';
    }

	/**
	 * @return array
	 */
    protected function options()
    {
        return [];
    }
}