@extends('layouts.master')

@section('content')


<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <strong>Proyek</strong>
                    </div>
                    <div class="float-right">
                        <a href="{{ url('proyek/create') }}"
                            class="btn btn-success btn-sm">
                            Create
                        </a>
                    </div>
                    
                </div>
                <div class="card-body table-responsive">
                    <table id="tablecust" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Proyek ID</th>
                                <th>Nama Proyek</th>
                                <th>Description</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Deadline</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($proyek as $row)
                                <tr>
                                    <td>{{ $row->proyek_id }}</td>
                                    <td>{{ $row->nama_proyek }}</td>
                                    <td>{{ $row->deskripsi_proyek }}</td>
                                    <td>{{ $row->tanggal_mulai }}</td>
                                    <td>{{ $row->tanggal_deadline }}</td>
                                    <td>{{ $row->status }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('proyek/' . $row->proyek_id) }}"
                                            class="btn btn-warning btn-sm">
                                            Detail
                                        </a>
                                        <a href="{{ url('proyek/' . $row->proyek_id .'/edit') }}"
                                            class="btn btn-primary btn-sm">
                                            Update
                                        </a>
                                        <form action="{{ url('proyek/' . $row->proyek_id) }}" method='POST'
                                            class='d-inline' onsubmit="return confirm('Are you sure to Delete this Question ?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
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
        </div>

    </div>
</div>



@endsection