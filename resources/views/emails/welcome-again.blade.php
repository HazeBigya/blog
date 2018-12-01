@component('mail::message')

# Introduction


Thanks so much for registering.

@component('mail::button', ['url' => 'https://laracasts.com'])

Strat Browsing

@endcomponent

@component('mail::panel', ['url' => ''])

Some inspirational quote here.

@endcomponent

Thanks,<br>

{{ config('app.name') }}

@endcomponent
