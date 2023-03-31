@extends('admin.parent')

@section('content')

ini halaman crud Letter

<div class="container card">
    <div class="card-header">Daftar Letter</div>

    <a href="{{ route('letter.create') }}" class="btn btn-primary col-2 ms-auto mt-3">
        Add Letter
    </a>

    <div class="container">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <td>No</td>
                    <td>title</td>
                    <td>address</td>
                    <td>content</td>
                    <td>date</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($letter as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->content }}</td>
                        <td>{{ $row->date }}</td>
                        <td>
                            <a href="{{ route('letter.show', $row->id) }}" class="btn btn-primary">
                                Show
                            </a>

                            <a href="{{ route('letter.edit', $row->id) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('letter.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-1" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
