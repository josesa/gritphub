<?php

namespace Gritphub;

use Github\Client as GithubClient;

class Client
{
    private $client = null;

    private $githubToken = null;

    public function __construct($config)
    {

    }

    private function getClient()
    {
        if (!$this->client) {
            $this->client = new GithubClient();
            $this->client->authenticate($this->githubToken, null, GithubClient::AUTH_HTTP_TOKEN);
        }

        return $this->client;
    }
}
