@extends('Layouts.master')
@section('title', 'Zadanie Rekrutacyjne - Dominik Kras')

@section('l1')
<h1>Listing 1.</h1>
<hr>

<p>
    @foreach($zad1 as $z1)

    @for($i = 0; $i < $z1->depth; $i++)
        &nbsp;&nbsp;&nbsp;
        @endfor

        {{$z1->name}}<br>

        @endforeach
</p>
@endsection


@section('l2')
<h1>Listing 2.</h1>
<form action="{{action('Controller@index')}}" method="POST">
    {{csrf_field()}}
    <select name="product" id="1" onchange="this.form.submit()" class="form-control form-control-sm">
        @foreach ($produkty as $p)
        <option value="{{$p->name}}" {{$p->name == $selected_product ? "selected" : ""}}>{{$p->name}}</option>
        @endforeach
    </select>
</form>
<hr>

<p>
    @foreach($zad2 as $z2)

    @for($i = 0; $i < $z2->depth; $i++)
        &nbsp;&nbsp;&nbsp;
        @endfor

        {{$z2->name}}<br>

        @endforeach
</p>
@endsection


@section('l3')
<h1>Listing 3.</h1>
<hr>
<p>
    <div class="ascii-table">
        <table>
            <thead>
                <th>category
                <th> product_count </th>
            </thead>
            <tbody>
                @foreach($zad3 as $z3)
                <tr>
                    <td>{{$z3->category}}
                    <td>{{$z3->product_count}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</p>
@endsection
