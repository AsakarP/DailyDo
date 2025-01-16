<?php

if (!function_exists('getBadgeClass')) {
    function getBadgeClass($status) {
        return match($status) {
            'to_do' => 'bg-warning',
            'in_progress' => 'bg-primary',
            'completed' => 'bg-success',
            default => 'bg-secondary'
        };
    }
}

if (!function_exists('getStatusText')) {
    function getStatusText($status) {
        return match($status) {
            'to_do' => 'To Do',
            'in_progress' => 'In Progress',
            'completed' => 'Completed',
            default => 'Unknown'
        };
    }
}