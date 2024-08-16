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

        $message = 'Felicidades tu nueva plaza fantasma es: ' . $job->title . ', Ganando: $' . number_format($job->salary, 2) . ' ' . $emojis[array_rand($emojis)] . '.';
        return response()->json(['message' => $message]);
    }
}
