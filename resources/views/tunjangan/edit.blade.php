@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Ubah Tunjangan</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('tunjangan.update',$tunjangan->id) }}">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            
                            <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">Kode Tunjangan</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('kode_tunjangan') ? 'has-errors':'message'}}" >
                                <input id="nip" type="text" class="form-control" name="nip" value="{{ $tunjangan->kode_tunjangan}}"  autofocus>

                            </div>
                            </div>
          
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Golongan</label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_golongan" >
                            <option >Pilih</option>
                            @foreach($golongan as $data)
                            <option value="{!! $data->id !!}">{!! $data->nama_golongan !!}</option>
                            @endforeach
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama Jabatan </label>
                            <div class="col-md-6">
                            <select class="form-control" name="id_jabatan" >
                            <option >Pilih</option>
                            @foreach($jabatan as $data)
                            <option value="{!! $data->id !!}">{!! $data->nama_jabatan !!}</option>
                            @endforeach
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="status" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                            <select class="form-control" name="status" required>
                            <option>Pilih</option>
                            <option>Kawin</option>
                            <option>Lajang</option>
                                </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">Jumlah Anak</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('jimlah_anak') ? 'has-errors':'message'}}" >
                                <input id="nip" type="text" class="form-control" name="nip" value="{{ $tunjangan->jumlah_anak}}"  autofocus>
                             @if($errors->has('jumlah_anak'))
                                <span class="help-block">
                                    <strong>{{$errors->first('jumlah_anak')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">Besaran Uang</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('besaran_uang') ? 'has-errors':'message'}}" >
                                <input id="nip" type="text" class="form-control" name="nip" value="{{ $tunjangan->besaran_uang}}"  autofocus>
                             @if($errors->has('besaran_uang'))
                                <span class="help-block">
                                    <strong>{{$errors->first('besaran_uang')}}</strong>
                                </span>
                            @endif
                            </div>
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
