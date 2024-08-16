<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $job = Job::inRandomOrder()->first();
        $emojis = [
            '💰💵💴',
            '💶💷💸',
            '🪙🏦🏧',
        ];

        $currentEmojis = $emojis[array_rand($emojis)];

        $message = 'Felicidades tu nueva plaza fantasma es: ' . $job->title . ', Ganando: $<strong>' . number_format($job->salary, 2) . '</strong> ' . $currentEmojis . '.';
        return response()->json([
            'title' => $job->title,
            'salary' => number_format($job->salary, 2),
            'message' => $message,
            'emoji' => $currentEmojis,
        ]);
    }
}
