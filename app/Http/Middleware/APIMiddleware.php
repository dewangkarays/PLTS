<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Laililmahfud\Adminportal\Api\Error;
use Laililmahfud\Adminportal\Api\JwtToken;
use Laililmahfud\Adminportal\Traits\JsonResponse;

class APIMiddleware
{
    use JsonResponse;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {
        if ((portalconfig('api.validate_blacklist') && JwtToken::isBlacklist())) {
            return $this->unauthorized('Your token was not found !');
        }

        try {
            $payload = JwtToken::decode();
        } catch (Exception $e) {
            return $this->unauthorized('Token was invalid', Error::INVALID_TOKEN);
        }


        return $next($request);
    }
}
