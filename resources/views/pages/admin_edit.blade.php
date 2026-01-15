@extends('layout_master')

@section('content')
    <h1>Edit Booking #{{ $booking->id }}</h1>

    <form method="POST" action="">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Service Type</label>
            <input type="text" name="service_type" class="form-control"
                value="{{ old('service_type', $booking->service_type) }}">
            @error('service_type')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Start Date</label>
                <input type="date" name="start_date" class="form-control"
                    value="{{ old('start_date', $booking->start_date) }}">
                @error('start_date')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">End Date</label>
                <input type="date" name="end_date" class="form-control"
                    value="{{ old('end_date', $booking->end_date) }}">
                @error('end_date')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $booking->email) }}">
            @error('email')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" name="company_name" class="form-control"
                value="{{ old('company_name', $booking->company_name) }}">
            @error('company_name')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Notes</label>
            <textarea name="notes" class="form-control" rows="3">{{ old('notes', $booking->notes) }}</textarea>
            @error('notes')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save changes</button>
        <a href="{{ route('admin.home') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
