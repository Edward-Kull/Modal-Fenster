@extends('layouts.app')
@section('title-block') Contact @endsection
@section('content')
<h1>Contact</h1>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error
)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('contact-form')  }}" method="post">
       @csrf
        <div class="form-group">
            <label for ="email">Email</label>
            <input type="text" name="email" placeholder="Email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for ="subject">Subject</label>
            <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for ="name">Name</label>
            <input type="text" name="name" placeholder="Name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for ="message">Massage</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
