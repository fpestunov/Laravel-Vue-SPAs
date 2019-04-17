<?php

// available at /api/stats
Route::get('stats', function () {
    return [
        'series' => 56,
        'lessons' => 100
    ];
});
