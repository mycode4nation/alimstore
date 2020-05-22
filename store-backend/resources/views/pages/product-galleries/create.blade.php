@extends('layouts.default')

    
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Produk</strong>
        </div>
        <div class="card-body card-block">
            <form   action="{{ route('product-galleries.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Produk</label>
                    <select name="product_id" id="" class="form-control @error('product_id') is-invalid @enderror">
                        
                        @foreach ($product as $p)
                            <option value="{{$p->id}}">{{$p->name}}</option>
                        @endforeach
                    
                    </select>
                </div>
                @error('product_id') <div class="text-muted">{{$message}}</div> @enderror
                
              

                <div class="form-group">
                    <label for="photo" class="form-control-label">Foto Produk</label>
                    <input type="file" name="photo" value="{{old('photo')}}" accept ="image/*" required class="form-control @error('photo') is-invalid @enderror"/>
                </div>
                @error('photo') <div class="text-muted">{{$message}}</div> @enderror

                <div class="form-group">
                    <label for="is_default" class="form-control-label">Jadikan Default</label>
                    <br>
                    <select name="is_default"  class=" form-control @error('is_default') is-invalid @enderror">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                @error('is_default') <div class="text-muted">{{$message}}</div> @enderror

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Tambah Foto Produk</button>
                </div>
            
            </form>
        </div>
    </div>
@endsection