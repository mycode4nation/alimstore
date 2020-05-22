@extends('layouts.default')

    
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Produk</strong>
            <small>{{$item->name}}</small>
        </div>
        <div class="card-body card-block">
            <form  method="POST" action="{{ route('products.update',$item->id)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Produk</label>
                    <input type="text" name="name" value="{{old('name') ? old('name') : $item->name }}" class="form-control @error('name') is-invalid @enderror"/>
                </div>
                @error('name') <div class="text-muted">{{$message}}</div> @enderror
                
                
                <div class="form-group">
                    <label for="type" class="form-control-label">Tipe Produk</label>
                    <input type="text" name="type" value="{{old('type') ? old('type') : $item->type }}" class="form-control @error('type') is-invalid @enderror"/>
                </div>
                @error('type') <div class="text-muted">{{$message}}</div> @enderror

                <div class="form-group">
                    <label for="descryption" class="form-control-label">Deskripsi</label>
                    <textarea name="description"  class="ckeditor form-control  @error('descryption') is-invalid  @enderror ">{{old('descryption') ? old('descryption') : $item->description }}</textarea> 
                </div>
                @error('descryption') <div class="text-muted">{{$message}}</div> @enderror

                <div class="form-group">
                    <label for="price" class="form-control-label">Harga</label>
                    <input type="text" name="price" value="{{old('price') ? old('price'):$item->price}}" class="form-control @error('price') is-invalid @enderror"/>
                </div>
                @error('price') <div class="text-muted">{{$message}}</div> @enderror

                <div class="form-group">
                    <label for="quantity" class="form-control-label">Kuantitas Produk</label>
                    <input type="text" name="quantity" value="{{old('quantity') ? old('quantity') : $item->quantity }}" class="form-control @error('quantity') is-invalid @enderror"/>
                </div>
                @error('quantity') <div class="text-muted">{{$message}}</div> @enderror

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Edit Produk</button>
                </div>
            
            </form>
        </div>
    </div>
@endsection