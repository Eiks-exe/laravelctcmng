@extends('layout')

@section('content')
    <form action="{{ route('contact.postCreate') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="exampleFormControlInput1" placeholder="enter a name" autocomplete="off" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="mail" value="{{ old('mail') }}" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Website(optional)</label>
            <input type="text" name="website" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">City</label>
            <select class="form-select" name="city_id" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex justify-content-around">
            <button class="btn btn-primary w-25" type="submit">add</button>
            <a class=" btn btn-danger w-25" href="">cancel</a>
        </div>
    </form>
@endsection
