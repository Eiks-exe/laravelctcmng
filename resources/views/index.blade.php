@extends('layout')


@section('content')
    <a  class="btn btn-success ml-5" href="{{route('contact.create')}}">+</a>
    <div class="col-sm-12 m-0 p-0 shadow-lg">

        <table class="table table-dark table-striped h-100">
            <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Telephone</th>
                <th scope="col">Commune</th>
                <th scope="col">Pays</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>
                        {{$contact->id}}
                    </td>
                    <td>
                        {{$contact->name}}
                    </td>
                    <td>
                        {{$contact->phone}}
                    </td>
                    <td>
                        {{$contact->website}}
                    </td>
                    <td>
                        @if($contact->city)
                            {{$contact->city->name}}
                        @endif
                    </td>
                    <td>
                        @if($contact->city and $contact->city->country)
                            {{$contact->city->country->name}}
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('contact.edit' , [$contact->id])}}">edit</a>
                        <a class="btn btn-danger" href="{{route('contact.delete' , [$contact->id])}}">delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

