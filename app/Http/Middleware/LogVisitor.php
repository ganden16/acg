<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
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
        $userAgent = $request->userAgent();

        $visitorKey = md5($ip . $userAgent);
        $timeLimit = now()->subMinutes(15);

        $existingVisitor = Visitor::where('visitor_key', $visitorKey)
                                ->where('visited_at', '>', $timeLimit)
                                ->first();

        if (!$existingVisitor) {
            Visitor::create([
                'visitor_key' => $visitorKey,
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'visited_at' => now(),
            ]);
        }

        return $next($request);
    }
}
