@extends('layout')


@section('content')
    <form action="{{ $contact->exists ? route('contact.putEdit' , $contact->id) : route('contact.postCreate') }}" method="POST">
        @csrf
        @if($contact->exists)
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $contact->name) }}" id="exampleFormControlInput1" placeholder="entrer un nom" autocomplete="off" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="mail" value="{{ old('mail', $contact->mail) }}" class="form-control" id="exampleFormControlInput1" placeholder="mail">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $contact->phone) }}" id="exampleFormControlInput1" placeholder="telephone">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Website(optional)</label>
            <input type="text" name="website" class="form-control" value="{{old('Website', $contact->website)}}" id="exampleFormControlInput1" placeholder="Website">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">City</label>
            <select class="form-select" name="city_id" aria-label="Default select example">
                @foreach($cities as $city)
                    <option value="{{$city->id}}" {{ old("city_id" , $contact->city_id) === $city->id ? 'selected'  : '' }}>{{$city->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="d-flex justify-content-around">
            <button class="btn btn-primary w-25" type="submit">enregistrer</button>
            <a class=" btn btn-danger w-25" href="">cancel</a>
        </div>
    </form>
@endsection
