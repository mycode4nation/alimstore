@extends('layouts.default')

    
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Data Transaksi</strong>
            <small>{{$item->name}}</small>
        </div>
        <div class="card-body card-block">
            <form  method="POST" action="{{ route('transaction.update',$item->id)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Pemesan</label>
                    <input type="text" name="name" value="{{old('name') ? old('name') : $item->name }}" class="form-control @error('name') is-invalid @enderror"/>
                </div>
                @error('name') <div class="text-muted">{{$message}}</div> @enderror
                
                <div class="form-group">
                    <label for="name" class="form-control-label">Alamat Pemesan</label>
                    <input type="text" name="address" value="{{old('alamat') ? old(alamat) : $item->address }}" class="form-control @error('address') is-invalid @enderror"/>
                </div>
                @error('address') <div class="text-muted">{{$message}}</div> @enderror
                
                <div class="form-group">
                    <label for="email" class="form-control-label">Email Pemesan</label>
                    <input type="email" name="email" value="{{old('email') ? old('email') : $item->email}}" class="form-control @error('email') is-invalid @enderror"/>
                </div>
                @error('email') <div class="text-muted">{{$message}}</div> @enderror

                <div class="form-group">
                    <label for="number" class="form-control-label">Phone Number</label>
                    <input type="text" name="number" value="{{old('number') ? old('number') : $item->number }}" class="form-control @error('number') is-invalid @enderror"/>
                </div>
                @error('number') <div class="text-muted">{{$message}}</div> @enderror

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Ubah Transaksi</button>
                </div>
            
            </form>
        </div>
    </div>
@endsection