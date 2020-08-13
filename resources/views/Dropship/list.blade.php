@extends('layouts.app')

@section('content')
<center>
<p>List of business owner:</p>
@foreach($data_business->user as $user)

<table style="height: 71px;" width="307" border="1">
    <tbody>
        <tr>
            <td style="width: 297px;">
            <a href="{{$user->id}}">
                <p>Proceed MastaPay under :</p>
                <p>name:{{$user->name}}</p>
                <p>email:{{$user->email}}</p>
                </a>
            </td>
        </tr>
    </tbody>
</table>

<br>
@endforeach
<a href="/Dropship/AddBusiness">add new business owner</a>
</center>


@endsection
