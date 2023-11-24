<?php

namespace App\Http\Middleware;

use Closure;
use Doctrine\Common\Lexer\Token;
use Exception;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class userMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof TokenInvalidException) {
                return response()->json(["Mensaje" => "Token Invalido"], 401);
            }
            if($e instanceof TokenExpiredException){
                return response()->json(["Mensaje" => "Token Expirado"]);
            }
            return response()->json(["No encontrado"=> $e->getMessage()]);
        }
        return $next($request);
    }
}
