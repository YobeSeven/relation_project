@extends("layouts.index")
@section("content")
    <h1 class="text-danger">Hello home</h1>

    @foreach ($eleves as $eleve)
        <h1>Name : {{$eleve->name}}</h1>
        <h1>Classe : {{$eleve->classe->name}}</h1>
        <h1>Gender : {{$eleve->gender->sexe}}</h1>
        <hr>
    @endforeach

    @foreach ($genders as $gender)
        @foreach ($gender->eleves as $eleve)
            <h1>{{$eleve->name}} / {{$gender->sexe}}</h1>
        @endforeach
    @endforeach

    @foreach ($classes as $classe)
        <h1>{{$classe->name}} :</h1>
        @foreach ($classe->eleves as $eleve)
            <h2>{{$eleve->gender->sexe}}</h2>
        @endforeach
    @endforeach
@endsection
