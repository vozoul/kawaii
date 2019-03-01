@foreach ($products as $product)
    {{--<li> {{ $product->id }} </li>--}}
    <ul>

        <li>{{ $product->name }}</li>
        <li>{{ $product->description }}</li>
        <li>{{ $product->price }}</li>
        <li>{{ $product->picture }}</li>
        <li><img src="{{ asset('$product->picture') }}" alt=""></li>

    </ul>
    <img src="{{ asset('$product->picture') }}" alt="">


@endforeach
<p>toto</p>
