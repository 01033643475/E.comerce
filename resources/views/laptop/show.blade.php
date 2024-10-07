<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($post as $user)
        <div class="product-widget">
            <div class="product-img">
                <img src="{{ $user->img }}" alt="">
            </div>
            <div class="product-body">
                <h3 class="product-name"><a href="#">{{ $user->name }}</a>
                </h3>
                <h4 class="product-price"><span class="qty">3x</span>{{ $user->price }}</h4>
                <h4 class="product-price"><span class="qty">3x</span>{{ $user->discount }}</h4>

            </div>
            <button class="delete"><i class="fa fa-close"></i></button>
        </div>
        </div>
    @endforeach

</body>

</html>
