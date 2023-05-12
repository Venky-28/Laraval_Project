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
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  margin: 50px;
  padding: 4px;
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
    <form action="{{url('book-add')}}" method="POST">
        @csrf
    <div>
        <label>Book Name</label>
        <input type="text" name="book_name">
<br>
<br>
          <label>Customer Name</label>
          <input type="text" name="customer">
<br>
<br>

        <label>Email</label>
        <input type="email" name="email">
<br>
<br>
        <button type="submit">Add</button>
    </div>
    </form>

    <div>
    <table style="width:70%">
  <tr>
    <th>Book name</th>
    <th>Customer name</th> 
    <th>Email</th>
    <th>Action</th>
  </tr>
    @foreach($customers as $customer)
    <tr>
        <td>{{$customer->book_name}}</td>
        <td>{{$customer->customer}}</td>
        <td>{{$customer->email}}</td>
        <td>
            <a href="{{url('customer-edit')}}/{{$customer->id}}">Edit</a>
            <a href="{{url('customer-delete')}}/{{$customer->id}}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
    </div>

</div>
</body>
</html>