@extends('layofakultas.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.fakultas.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.fakultass.update", [$fakultas->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="fakultasnim">{{ trans('cruds.fakultas.fields.fakultasnim') }}</label>
                <input class="form-control {{ $errors->has('fakultasnim') ? 'is-invalid' : '' }}" type="text" nim="fakultasnim" id="fakultasnim" value="{{ old('fakultasnim', $fakultas->fakultasnim) }}" required>
                @if($errors->has('fakultasnim'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fakultasnim') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.fakultas.fields.fakultasnim_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nama">{{ trans('cruds.fakultas.fields.nama') }}</label>
                <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" type="text" nim="nama" id="nama" value="{{ old('nama', $fakultas->nama) }}" required>
                @if($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.fakultas.fields.nama_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nim">{{ trans('cruds.vehicle.fields.nim') }}</label>
                <input class="form-control {{ $errors->has('nim') ? 'is-invalid' : '' }}" type="text" nim="nim"
                    id="nim" value="{{ old('nim', $vehicle->nim) }}" required>
                @if ($errors->has('nim'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nim') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.vehicle.fields.nim_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="prodi">{{ trans('cruds.vehicle.fields.prodi') }}</label>
                <input class="form-control {{ $errors->has('prodi') ? 'is-invalid' : '' }}" type="text" prodi="prodi"
                    id="prodi" value="{{ old('prodi', $vehicle->prodi) }}" required>
                @if ($errors->has('prodi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('prodi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.vehicle.fields.prodi_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection