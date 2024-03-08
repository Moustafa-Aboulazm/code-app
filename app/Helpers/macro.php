<?php

use Illuminate\Support\Facades\Blade;

Blade::directive('title', function ($expression) {
    return "<?php \$title = $expression ?>";
});

Blade::directive('description', function ($expression) {
    return "<?php \$description = $expression ?>";
});

Blade::directive('canonical', function ($expression) {
    return "<?php \$canonical = $expression ?>";
});

