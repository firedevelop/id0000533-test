<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('blog-post', ['id' => 1]) }}">Blog Post 1</li>
{{--      <li><a href="{{ route('customers',['id_lang'=>2],['id_user'=>1] )}}">Customers</a></li> --}}
        <li><a href="/products/1/1">Spanish</a> | <a href="/products/2/1">English</a></li>
    </ul>
    @yield('content')
    @yield('products')
    @yield('customers')
</body>
    </html>
