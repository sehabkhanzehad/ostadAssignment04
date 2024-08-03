@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Contact Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $contact->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $contact->address }}</p>
        </div>
    </div>

    <a href="{{ route('contacts.index') }}" class="btn btn-secondary mt-3">Back to Contacts</a>
@endsection
