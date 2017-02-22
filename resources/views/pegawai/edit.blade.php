@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Ubah Pegawai</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('pegawai.update',$pegawai->id) }}" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            
                            <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">Nip</label>
                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" value="{{ $pegawai->nip}}"  autofocus>
                            </div>
                            </div>

                           <div class="form-group " >
                            <label for="name" class="col-md-4 control-label">Nama Golongan </label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('id_golongan') ? 'has-errors':'message'}}" >
                            <select class="form-control" name="id_golongan" >
                            <option >Pilih</option>
                            @foreach($golongan as $data)
                            <option value="{!! $data->id !!}">{!! $data->nama_golongan !!}</option>
                            @endforeach
                            </select>
                             @if($errors->has('id_golongan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('id_golongan')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                  

                            <div class="form-group " >
                            <label for="name" class="col-md-4 control-label">Nama Jabatan </label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('id_jabatan') ? 'has-errors':'message'}}" >
                            <select class="form-control" name="id_jabatan" >
                            <option >Pilih</option>
                            @foreach($jabatan as $data)
                            <option value="{!! $data->id !!}">{!! $data->nama_jabatan !!}</option>
                            @endforeach
                            </select>
                            @if($errors->has('id_jabatan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('id_jabatan')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                             <div class="form-group">
                            <label for="foto" class="col-md-4 control-label">foto</label>
                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control" name="foto" value="{{ $pegawai->foto}}"  autofocus>
                            </div>
                            </div>
                            
                          

                          

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
