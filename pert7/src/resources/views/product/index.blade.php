@extends('layouts.main')
@section('content')
{{ dd($product) }}
<table class="table">
    <thead> 
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($product as $pr)
            <tr> 
                <th scope="row">{{ $pr->id }}</th>
               <td>{{ $pr->name }} </td> 
            </tr>
            @endforeach
        </tbody>
</table>

@endsection