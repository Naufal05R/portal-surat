@extends('admin.parent')

@section('content')

<label for="" class="form-table">title Letter</label>
<input type="text" class="form-control" value="{{ $letter->title }}" readonly>

<label for="" class="form-table mt-3">address Letter</label>
<input type="text" class="form-control" value="{{ $letter->address }}" readonly>

<label for="" class="form-table mt-3">content Letter</label>
<input type="text" class="form-control" value="{{ $letter->content }}" readonly style="padding-bottom: 16rem">

<label for="" class="form-table mt-3">date Letter</label>
<input type="date" class="form-control" value="{{ $letter->date }}" readonly>

<a href="{{ route('letter.index') }}" class="btn btn-outline-info mt-3">Back</a>

@endsection
