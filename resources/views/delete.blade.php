@extends('layout')
@section('content')
    <h1>Delete a product</h1>

    <form method="POST" action="{{action('ProductsController@delete',$products->id)}}">

        {{ csrf_field() }}

        <div class="row" style="margin-bottom:10px">
            <div class="col-md-5">
                Are you sure you want to delete product named {{ $products->name }} ?
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-5">
                <a  class="btn btn-primary" href="/products/{{ $products->id }}/" title="Go back to category">No</a>
                <button class="btn btn-danger" type="submit">Yes</button>
            </div>
        </div>
    </form>
@endsection
