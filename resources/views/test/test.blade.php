@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Alamat</th>
                        <th>Jurusan</th>
                        <th>TTL</th>
                        <th>Nama-Sekolah</th>
                    </tr>
                    @foreach ($test as $test)
                        <tr>
                            <td>{{$test->id}}</td>
                            <td>{{$test->nama}}</td>
                            <td>{{$test->NIS}}</td>
                            <td>{{$test->alamat}}</td>
                            <td>{{$test->jurusan}}</td>
                            <td>{{$test->ttl}}</td>
                            <td>{{$test->nama_sekolah}}</td>
                            <td>
                                <form method="POST" action="{{ route('test.destroy', $test->id) }}" accept-charset="UTF-8">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <a href="{{ route('test.edit', $test->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <input type="submit" name="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus Data?');" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop
