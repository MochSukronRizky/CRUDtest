@extends('layout.app')

@section('content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Test
            </div>
            <div class="panel-body">
                <form action="{{ route('test.store') }}" method="post">
                <input type="hidden" name="id" value="{{str_random(35)}}">
                {{csrf_field()}}
                <div class="form-group{{$errors->has('nama')?'has-error':''}}">
                    <label for="nama" class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    {!!$errors->first('nama', '<p class="help-block">:message</p>')!!}
                </div>
                <br>
                <div class="form-group{{$errors->has('NIS')?'has-error':''}}">
                    <label for="NIS" class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                        <input type="text" name="NIS" class="form-control" placeholder="NIS">
                    </div>
                    {!!$errors->first('NIS', '<p class="help-block">:message</p>')!!}
                </div>
                <br>
                <div class="form-group{{$errors->has('alamat')?'has-error':''}}">
                    <label for="alamat" class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                        <input type="text" name="alamat" class="form-control" placeholder="alamat">
                    </div>
                    {!!$errors->first('alamat', '<p class="help-block">:message</p>')!!}
                </div>
                <br>
                <div class="form-group{{$errors->has('jurusan')?'has-error':''}}">
                    <label for="jurusan" class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                        <select type="text" name="jurusan" class="form-control" placeholder="jurusan">
                        <option>RPL</option>
                        <option>Akutansi</option>
                        <option>Multimedia</option>
                        <option>Adm. perkantoran</option>
                        <option>Tataniaga</option>
                        </select>
                    </div>
                    {!!$errors->first('jurusan', '<p class="help-block">:message</p>')!!}
                </div>
                <br>
                <div class="form-group{{$errors->has('ttl')?'has-error':''}}">
                    <label for="ttl" class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                        <input type="dateTime" name="ttl" class="form-control" placeholder="TTL">
                    </div>
                    {!!$errors->first('ttl', '<p class="help-block">:message</p>')!!}
                </div>
                <br>
                <div class="form-group{{$errors->has('nama_sekolah')?'has-error':''}}">
                    <label for="nama_sekolah" class="col-md-2 control-label"></label>
                    <div class="col-md-10">
                        <input type="text" name="nama_sekolah" class="form-control" placeholder="Nama Sekolah">
                    </div>
                    {!!$errors->first('nama_sekolah', '<p class="help-block">:message</p>')!!}
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-default" value="Create">
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
