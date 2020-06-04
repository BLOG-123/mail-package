<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Contact Us</title>
    </head>
    <body>
    <h1> contact us any time</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter your name">
        <input type="email" name="email" placeholder="enter your email">
        <textarea name="message" col="30" rows="10" placeholder="enter your message"></textarea>
        <input type="submit" value="submit">
    </form>
    </body>
</html>
