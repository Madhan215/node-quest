<?php

namespace App\Helpers;

use App\Models\Progress;
use Illuminate\Support\Facades\Auth;

class ProgressHelper
{
    public static function getCompletedStep()
    {
        return Progress::where('user_id', Auth::id())
            ->where('completed', true)
            ->max('step_id') ?? 0;
    }
}
