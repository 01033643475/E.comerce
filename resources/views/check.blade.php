<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Posts</title>
</head>

<body>
    {{-- <a class="btn btn-danger" href="{{ route('posts.delete.all') }}" role="button"
        style="position: relative; bottom: -105px; left: 45%;">Delete All</a> --}}
    <table class="table" style="position: relative; bottom: -114px;">
        <thead>
            <tr>
                <td></td>
                <th scope="col">ID</th>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">email</th>
                <th scope="col">address</th>
                <th scope="col">country</th>
                <th scope="col">city</th>
                <th scope="col">phone</th>
                <th scope="col">code</th>
                <th scope="col">order</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($check as $post)
                <tr>
                    <th scope="row"><input type="checkbox" name="post_id[]" value="{{ $post->id }}"></th>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->firstname }}</td>
                    <td>{{ $post->lastname }}</td>
                    <td>{{ $post->email }}</td>
                    <td>{{ $post->address }}</td>
                    <td>{{ $post->country }}</td>
                    <td>{{ $post->city }}</td>
                    <td>{{ $post->phone }}</td>
                    <td>{{ $post->code }}</td>
                    <td>{{ $post->order }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
