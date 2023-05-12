<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #head{
        margin: 50px;
    }
</style>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <form action="{{url('book-update')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$customer->id}}" >
    <div>
        <label>Book Name</label>
        <input type="text" name="book_name" value="{{$customer->book_name}}">
<br>
<br>
          <label>Customer Name</label>
          <input type="text" name="customer" value="{{$customer->customer}}">
<br>
<br>

        <label>Email</label>
        <input type="email" name="email" value="{{$customer->email}}">
<br>
<br>
        <button type="submit">Update</button>
    </div>
    </form>
</div>
</body>
</html>