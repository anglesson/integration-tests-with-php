<?php

namespace Integration;

class RestTest extends \PHPUnit\Framework\TestCase
{
    public function testApiRestDeveRetornarArrayDeLeiloes()
    {
        $resposta = file_get_contents('http://localhost:8000/rest.php');

        self::assertStringContainsString('200 OK', $http_response_header[0]);
        self::assertIsArray(json_decode($resposta));
    }
}