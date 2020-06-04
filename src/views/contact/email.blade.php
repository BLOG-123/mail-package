@component('mail::message')
# Introduction

Hi,
This is message from {{$name}}
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
