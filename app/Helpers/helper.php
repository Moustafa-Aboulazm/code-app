<?php

if (!function_exists('active')) {
    /**
     * Checks if the current request path matches the given path.
     *
     * This function is used to determine if a specific path is active. If the current request path matches
     * the given path, it returns the string 'active'. Otherwise, it returns an empty string.
     *
     * @param string|array $path The path or paths to check against the current request path.
     * @param string $active The string to return if the current request path matches the given path. Default is 'active'.
     * @return string Returns the string 'active' if the current request path matches the given path, otherwise returns an empty string.
     */
    function active(string|array $path, string $active = 'active'): string
    {
        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }
}

