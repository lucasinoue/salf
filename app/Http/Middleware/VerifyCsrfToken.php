<?php

namespace Salf\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/sala/*',
        '/departamento/*',
        '/incidencia/*',
        '/motivo/*',
        '/user/*'
    ];
}
