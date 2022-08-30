<?php

namespace App\Services;

class SendFeedbackService
{
    private $params;

    public function __construct($params){
        $this->params = $params;
    }

    /**
     * @throws GuzzleException
     * @throws \Exception
     */
    public function run ()
    {
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer ' . config('settleboard.token'),
            'accept-version' => config('settleboard.accept_version')
        ];
        $res = $client->post(config('settleboard.base_uri') . '/feedback', [
            'headers' => $headers,
            'form_params' => $this->params
        ]);
        return json_decode($res->getBody()->getContents(), true);
    }
}
