<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="background: #e5e5e5; padding: 30px;" >

<div style="max-width: 320px; margin: 0 auto; padding: 20px; background: #fff;">
    <h3>Message via le SMTP Google :</h3>
    <div>{{ $data['message'] }}</div>
</div>

@if (session()->has('text'))
    <p>{{ session('text') }}</p>
@endif

<form url="{{ route('send.message.google') }}" method="POST" >
    <label for="message" >Message</label>
    {{ @csrf_field() }}
    <p>
        <textarea name="message" id="message" rows="4" placeholder="Message à envoyer ici" ></textarea>
        {{ $errors->first('message', ":message")}}
    </p>
    <button type="submit" >Envoyer</button>
</form>

</body>
</html>
