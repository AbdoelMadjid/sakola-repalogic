<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Build CSP header value from configured directives.
     *
     * @param  array<string, array<int, string>>  $directives
     */
    protected function buildCspValue(array $directives): string
    {
        $chunks = [];

        foreach ($directives as $directive => $sources) {
            if (empty($sources)) {
                continue;
            }

            $chunks[] = $directive . ' ' . implode(' ', $sources);
        }

        return implode('; ', $chunks) . ';';
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Reduce software fingerprinting.
        $response->headers->remove('X-Powered-By');
        $response->headers->remove('Server');

        if (function_exists('header_remove')) {
            header_remove('X-Powered-By');
        }

        if (! $response->headers->has('X-XSS-Protection')) {
            $response->headers->set('X-XSS-Protection', (string) config('security_headers.x_xss_protection', '0'));
        }

        if ((bool) config('security_headers.csp.enabled', true) && ! $response->headers->has('Content-Security-Policy')) {
            $enforcedDirectives = (array) config('security_headers.csp.enforce', []);

            $response->headers->set(
                'Content-Security-Policy',
                $this->buildCspValue($enforcedDirectives)
            );
        }

        if (
            (bool) config('security_headers.csp.report_only_enabled', false)
            && ! $response->headers->has('Content-Security-Policy-Report-Only')
        ) {
            $reportOnlyDirectives = (array) config('security_headers.csp.report_only', []);

            $response->headers->set(
                'Content-Security-Policy-Report-Only',
                $this->buildCspValue($reportOnlyDirectives)
            );
        }

        return $response;
    }
}
