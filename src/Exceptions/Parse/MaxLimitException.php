<?php
namespace Examyou\RestAPI\Exceptions\Parse;

use Examyou\RestAPI\Exceptions\ApiException;
use Examyou\RestAPI\Exceptions\ErrorCodes;

class MaxLimitException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_MAX_LIMIT;

    protected $message = "Requested more records than maximum limit in single request";
}