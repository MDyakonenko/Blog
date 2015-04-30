@extends('app')


@section('content')
<form method="POST" action="contact" id="feedback-form">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	Ваше имя:
	<input type="text" name="name" required placeholder="Фамилия имя отчество" x-autocompletetype="name">
	Email для связи:
	<input type="email" name="email" required placeholder="Адрес электронной почты" x-autocompletetype="email">
	Ваше сообщение:
	<textarea name="body" required placeholder="Не оставляйте пустым это поле :)" x-autocompletetype="body"></textarea>
	<input type="submit" value="отправить">
</form>
@endsection

