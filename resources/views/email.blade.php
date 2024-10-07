<h1>create form </h1>
<form action="{{ url('email/insert') }}" method="post">
    @csrf
    <label for="">email</label>
    <input type="text" name="email" placeholder="enter email">

    <label for="">password</label>
    <input type="password" name="password" placeholder="enter password">

    <button type="submit">submit</button>
</form>
