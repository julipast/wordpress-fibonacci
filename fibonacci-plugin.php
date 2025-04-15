<?php
/*
Plugin Name: Fibonacci Display
Description: Display the string of Fibonacci numbers.
Version: 1.0
Author: Yuliia Pastukhova
*/

add_shortcode('fibonacci_numbers', 'fibonacci_display_shortcode');

function fibonacci_display_shortcode(array $atts): string
{
    $atts = shortcode_atts([
        'day' => 11,
        'month' => 7
    ], $atts);

    $day = (int)$atts['day'];
    $month = (int)$atts['month'];

    return fibonacci_display($day, $month);
}

function fibonacci_display(int $day, int $month): string
{
    $limit = $day * $month * 60;
    $fib = [0, 1];

    if ($limit <= 0) {
        return '<p>Error: Incorrect birthday data.</p>';
    }

    while (true) {
        $next = $fib[count($fib) - 1] + $fib[count($fib) - 2];
        $fib[] = $next;
        if ($next > $limit) {
            break;
        }
    }

    $output = '<p>Fibonacci numbers to the first number greater than ' . $limit . ':</p>';
    $output .= '<p>' . implode(', ', $fib) . '</p>';

    return $output;
}

