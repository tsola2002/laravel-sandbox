<div>
    {{-- this is our info page --}}

    {{-- {{ $firstname }} --}}

    {{-- @if($age > 18)
        You are old enough to drink
        @else
        You are not old enough to drink
    @endif --}}

    {{-- @unless ($age > 18)
        You not are old enough to drink
    @endunless --}}

    {{-- @for ($i = 0; $i < $age; $i++)
        The age is {{ $i }}<br>
    @endfor --}}

    @foreach ($hobbies as $hobby)
         {{ $hobby }} <br>
    @endforeach

</div>
