<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Posts</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .table-container {
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .table img {
            width: 100px;
            height: auto;
        }

        @media (max-width: 768px) {
            .table-container {
                padding: 10px;
            }

            .table {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="table-container">
            <h2 class="text-center mb-4">All Access Posts</h2>

            <!-- زر الحذف الكل (يمكن إلغاء التعليق لاحقًا عند الحاجة) -->
            {{-- <a class="btn btn-danger mb-3" href="{{ route('posts.delete.all') }}" role="button">Delete All</a> --}}

            <!-- جعل الجدول قابلاً للتمرير على الشاشات الصغيرة -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th></th>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($access as $post)
                            <tr>
                                <td><input type="checkbox" name="post_id[]" value="{{ $post->id }}"></td>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->name }}</td>
                                <td>{{ $post->price }}</td>
                                <td>{{ $post->discount }}</td>
                                <td><img src="{{ asset('storage/' . $post->img) }}" alt="image"></td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ url('access/edit', $post->id) }}"
                                        role="button">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="{{ url('access/delete', $post->id) }}"
                                        role="button">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
