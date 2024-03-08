<!-- Twitter sharing -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ isset($title) ? $title.' | ' : '' }}{{ config('app.name') }}">
<meta name="twitter:creator" content="@buildingcoodes" />
<!-- /Twitter sharing -->

<!-- Facebook sharing -->
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="{{ isset($title) ? $title.' | ' : '' }}{{ config('app.name') }}" />

@if (isset($shareImage))
    <meta property="og:image" content="{{ $shareImage }}" />
@else
    <meta property="og:image" content="{{ asset('assets/img/logo.png') }}" />
@endif
<!-- /Facebook sharing -->

<!-- TikTok sharing -->
<meta property="tt:app_id" content="123456" />
<meta property="tt:card_type" content="summary_large_image" />
<meta property="tt:site" content="@buildingcoodes" />
<meta property="tt:title" content="{{ isset($title) ? $title.' | ' : '' }}{{ config('app.name') }}" />
<!-- /TikTok sharing -->

<!-- WhatsApp sharing -->
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:description" content="{{ $description ?? config('app.description') }}" />
<!-- /WhatsApp sharing -->
