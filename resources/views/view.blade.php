@extends('pages.main')

@section('main-section')
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>username</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>city</th>
                <th>state</th>
                <th>gender</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->state }}</td>
                    <td>
                        @if ($item->gender == 1)
                            <span class="badge badge-primary">Male</span>
                        @elseif($item->gender == 2)
                            <span class="badge badge-success">Female</span>
                        @else
                            <span class="badge badge-secondary">Custom</span>
                        @endif
                    </td>
                    <td>

                        @if ($item->status == 1)
                            <span class="badge badge-primary">Active</span>
                        @else
                            <span class="badge badge-danger">InActive</span>
                        @endif
                    </td>
                    <td class="d-flex">
                        <a style="display: inline-block;" href="{{ url('update/') }}/{{ $item->id }}"
                            class=" p-2 text-light badge badge-primary">Edite</a>
                        <a style="display: inline-block;" href="{{ url('delete/') }}/{{ $item->id }}"
                            class="ml-1 p-2 text-light badge badge-danger">Delete</a>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
