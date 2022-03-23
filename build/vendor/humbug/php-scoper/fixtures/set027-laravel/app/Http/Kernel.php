<?php

namespace RoRdb\App\Http;

use RoRdb\Illuminate\Foundation\Http\Kernel as HttpKernel;
class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [\RoRdb\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class, \RoRdb\Illuminate\Foundation\Http\Middleware\ValidatePostSize::class, \RoRdb\App\Http\Middleware\TrimStrings::class, \RoRdb\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class, \RoRdb\App\Http\Middleware\TrustProxies::class];
    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = ['web' => [
        \RoRdb\App\Http\Middleware\EncryptCookies::class,
        \RoRdb\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \RoRdb\Illuminate\Session\Middleware\StartSession::class,
        // \Illuminate\Session\Middleware\AuthenticateSession::class,
        \RoRdb\Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \RoRdb\App\Http\Middleware\VerifyCsrfToken::class,
        \RoRdb\Illuminate\Routing\Middleware\SubstituteBindings::class,
    ], 'api' => ['throttle:60,1', 'bindings']];
    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = ['auth' => \RoRdb\Illuminate\Auth\Middleware\Authenticate::class, 'auth.basic' => \RoRdb\Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class, 'bindings' => \RoRdb\Illuminate\Routing\Middleware\SubstituteBindings::class, 'cache.headers' => \RoRdb\Illuminate\Http\Middleware\SetCacheHeaders::class, 'can' => \RoRdb\Illuminate\Auth\Middleware\Authorize::class, 'guest' => \RoRdb\App\Http\Middleware\RedirectIfAuthenticated::class, 'signed' => \RoRdb\Illuminate\Routing\Middleware\ValidateSignature::class, 'throttle' => \RoRdb\Illuminate\Routing\Middleware\ThrottleRequests::class];
}
