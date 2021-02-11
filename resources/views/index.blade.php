@extends('layout')


@section('content')
    <a  class="btn btn-success ml-5" href="{{route('contact.create')}}">+</a>
    <div class="col-sm-12 m-0 p-0 shadow-lg">

        <table class="container-fluid table table-dark table-striped h-100 w-100">
            <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Telephone</th>
                <th scope="col">Site web</th>
                <th scope="col">Commune</th>
                <th scope="col">Pays</th>
                <th scope="col">
                    <form action="{{route('contact.index')}}" method="GET" class="row">
                        <input type="text" name="search" class="form-control w-50 " value="{{request()->get('search')}}">
                        <button type="submit" class="btn btn-primary col mx-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </form>
                </th>
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
                       @if($contact->website)
                           <a href="{{$contact->website}}" class="btn text-white border-success" data-toggle="popover">
                               site web
                           </a>
                            <input type="" id="{{$contact->name}}" value="{{$contact->website}}" class="visually-hidden">
                       @endif
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
                        <a class="btn btn-danger " href="{{route('contact.delete' , [$contact->id])}}">delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {{$contacts ->links()}}
    </div>
    <script>
            $(document).ready(function(){
                let wsite = document.querySelector('input').value
                $('[data-toggle="popover"]').tooltip({title: `${wsite}`, trigger:"hover", placement:"right"});
            });
    </script>
@endsection


