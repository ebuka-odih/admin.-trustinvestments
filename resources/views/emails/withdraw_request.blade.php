@component('mail::message')
# Hello Admin

A new withdrawal request has been sent

<p>Name: {{ $withdraw->user->name }}</p> <br>
<p>Email: {{ $withdraw->user->email }}</p> <br>
<p>Amount: {{ $withdraw->amount }}</p> <br>
<p>Method: {{ $withdraw->method }}</p> <br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
