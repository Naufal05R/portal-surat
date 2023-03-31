@extends('admin.parent')

@section('content')

<form action="{{ route('letter.store') }}" method="post">
    @csrf
    @method('POST')

    <label for="" class="form-label"> title Letter </label>
    <input type="text" class="form-control" name="title">

    <label for="" class="form-label"> address Letter </label>
    <input type="text" class="form-control" name="address">

    <label for="" class="form-label"> content Letter </label>
    <textarea class="form-control" cols="30" rows="10" name="content">

    </textarea>

    <label for="" class="form-label"> date Letter </label>
    <input type="date" class="form-control" name="date">

    <button type="submit" class="btn btn-primary mt-3">Add Letter</button>
</form>

@endsection
