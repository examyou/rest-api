<?php

namespace Examyou\RestAPI\Exceptions\Parse;

use Examyou\RestAPI\Exceptions\ApiException;
use Examyou\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}