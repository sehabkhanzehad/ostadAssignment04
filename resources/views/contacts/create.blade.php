@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create Contact</h1>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

    <a href="{{ route('contacts.index') }}" class="btn btn-secondary mt-3">Back to Contacts</a>
@endsection
