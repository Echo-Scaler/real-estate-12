@component('mail::message')

Hi, {{$user->name}}.Please set your password to login.

<p>It happens,Click the link below to set your password.</p>

{{-- this is to set the password to the user => token --}}
@component('mail::button', ['url' => url('set_new_password/'.$user->remember_token)])
Set Your Password
@endcomponent
Thanks,<br>

@endcomponent
