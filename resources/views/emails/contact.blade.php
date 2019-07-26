@component('mail::message')
# {{ $message->subject }}

{{ $message->body }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
