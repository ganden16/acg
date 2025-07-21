<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $oneHourAgo = now()->subHour();

        $existingVisitor = Visitor::where('ip', $ip)
            ->where('visited_at', '>=', $oneHourAgo)
            ->exists();

        if (!$existingVisitor) {
            Visitor::create([
                'ip' => $ip,
                'visited_at' => now(),
            ]);
        }

        return $next($request);
    }
}
