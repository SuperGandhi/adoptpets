{{-- <h1>Hi World {{ $name }} </h1> --}}

@if (true)
    <a href="{{ route('about') }}">{{__('Redirect Home')}}</a>
@endif

@foreach ($numbers as $number)
    <h1>{{ $number }}</h1>
@endforeach

<script>
    let numbers = @json($numbers);
    console.log(numbers);
</script>