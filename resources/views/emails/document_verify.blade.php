@component('mail::message')
# Hello {{ $user->name }}

## ID Verification

<p>Your ID upload has been successfully verified
</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
