@extends('dashboard.layout.main')

@section('container')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Data Pasien
                            <span style="float:right">
                                <a href="/patient/create" class="btn btn-info rounded-pill">Add</a>
                            </span>
                        </h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">RM</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($patient as $row)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $row->rm_number }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->age }}</td>
                                        <td>{{ $row->gender == 'l' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                        <td>
                                            <a href="/patient/{{ $row->id }}/edit" class="btn btn-info">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <form action="/patient/{{ $row->id }}" method="post"
                                                style="display:inline-block">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Sure?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
