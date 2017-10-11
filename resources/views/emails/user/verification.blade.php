@component('mail::message')
# Introduction

Please Verify Your Account

@component('mail::button', ['url' => $url])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
