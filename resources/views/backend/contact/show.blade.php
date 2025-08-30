@extends('backend.layouts.master')

@section('container')
    <h2>Message Detail</h2>
    <p><strong>Full Name:</strong> {{ $message->full_name }}</p>
    <p><strong>Email:</strong> {{ $message->email }}</p>
    <p><strong>Message:</strong><br>{{ $message->message }}</p>
    <a href="{{ route('admin.contact.index') }}" class="btn btn-secondary">Back</a>
@endsection
