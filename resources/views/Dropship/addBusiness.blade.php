@extends('layouts.app')

@section('content')
<center>

<form action="/Dropship/AddBusiness" method="POST">

    <p>insert registration link</p>
    @csrf
    <input type="url" name ="link">
    <input type="submit">

</form>
</center>
@endsection
