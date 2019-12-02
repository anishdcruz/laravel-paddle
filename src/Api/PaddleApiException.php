<?php

namespace ProtoneMedia\LaravelPaddle\Api;

class PaddleApiException extends \Exception
{
    /**
     * Creates an instance for an unsuccesful request
     *
     * @param  int    $status
     * @return $this
     */
    public static function unsuccessfulStatus(int $status)
    {
        return new static("Response with status code {$status}");
    }

    /**
     * Creates an instance for a response that contains an error
     *
     * @param  array    $response
     * @return $this
     */
    public static function fromResponse(array $response)
    {
        return new static("[{$response['error']['code']}] {$response['error']['message']}");
    }
}
