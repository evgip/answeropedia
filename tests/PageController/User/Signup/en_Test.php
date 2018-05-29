<?php

class Signup_User_PageController__en__Test extends Abstract_Frontend_TestCase
{
    public function testBase()
    {
        $environment = \Slim\Http\Environment::mock([
            'REQUEST_METHOD' => 'GET',
            'REQUEST_URI' => '/en/signup',
        ]);
        $request = \Slim\Http\Request::createFromEnvironment($environment);
        $this->app->getContainer()['request'] = $request;

        $response = $this->app->run(true);
        $responseBody = (string) $response->getBody();

        $this->assertContains('Registration on the questions-and-answers service - OctoAnswers', $responseBody);
        $this->assertSame(200, $response->getStatusCode());
    }
}
