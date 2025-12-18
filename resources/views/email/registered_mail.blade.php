@component('mail::message')

Hi, {{$user->name}}.Please set your password to login.

<p>It happens,Click the link below to set your password.</p>

@component('mail::button', ['url' => url('/admin/set_new_password/'.$user->remember_token)])
Set Your Password
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
