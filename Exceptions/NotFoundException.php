<?php

namespace Igsem\ApiExceptions\Exceptions;


/**
 * Created by PhpStorm.
 * User: juliuskoronci
 * Date: 23/04/2017
 * Time: 11:54
 */
class NotFoundException extends \Exception implements ApiExceptionInterface
{
    /** @var array - used to pass additional info for dev env */
    private $debug;

    /**
     * TokenException constructor.
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     * @param array $debug
     */
    public function __construct(
        $message = StatusCodes::NOT_FOUND_MESSAGE,
        $code = StatusCodes::NOT_FOUND_CODE,
        \Throwable $previous = null,
        $debug = []
    )
    {
        $message = $message??StatusCodes::NOT_FOUND_MESSAGE;
        $code = $code??StatusCodes::NOT_FOUND_CODE;
        parent::__construct($message, $code, $previous);
        $this->debug = $debug;
    }

    /**
     * @return array
     */
    public function getDebug(): array
    {
        return $this->debug;
    }

    /**
     * @param array $debug
     */
    public function setDebug(array $debug = [])
    {
        $this->debug = $debug;
    }
}