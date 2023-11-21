<x-mail::message>
Чтобы создать новый пароль перейдите по ссылке

<x-mail::button :url="'http://0.0.0.0/forgot-password'">
Перейти
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
