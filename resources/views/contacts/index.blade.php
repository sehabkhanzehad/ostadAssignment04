@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name<a style="float: right"
                        href="{{ route('contacts.index', ['sort_by' => 'name', 'sort_order' => request('sort_order') == 'asc' ? 'desc' : 'asc']) }}"><i
                            class="fa fa-fw fa-sort"></i></a></th>
                <th>Date<a style="float: right"
                        href="{{ route('contacts.index', ['sort_by' => 'created_at', 'sort_order' => request('sort_order') == 'asc' ? 'desc' : 'asc']) }}"><i
                            class="fa fa-fw fa-sort"></i></a></th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $sl => $contact)
                <tr>
                    <td>{{ $sl + $contacts->firstItem() }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center"><b>No contacts found.</b></td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
