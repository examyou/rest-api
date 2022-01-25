<?php

namespace Examyou\RestAPI\Exceptions\Parse;

use Examyou\RestAPI\Exceptions\ApiException;
use Examyou\RestAPI\Exceptions\ErrorCodes;

class FilterNotFoundException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_FILTER_NOT_FOUND;

    protected $message = "Requested filter not found";

}