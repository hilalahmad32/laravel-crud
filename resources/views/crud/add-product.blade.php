<x-layout>
    <x-slot name="title">Add-Product</x-slot>
    <x-slot name="content">
        <div class="container my-5">
            <div class="row">
                <div class="col-xl-6 col-md-8 col-sm-12 offset-xl-3 offset-md-2 offset-sm-0">
                    <div class="card ">
                        <div class="card-header bg-dark text-white">
                            <h1>Add Product</h1>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Enter the Title</label>
                                    <input type="text" name="title" id="title" class="form-control form-control-lg">
                                    @error('title')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Enter the Description</label>
                                    <textarea name="desc" id="desc" cols="30" rows="10"
                                        class="form-control form-control-lg"></textarea>
                                        @error('desc')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Enter the Price</label>
                                    <input type="number" name="price" id="price" class="form-control form-control-lg">
                                    @error('price')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <button type="submit" class="btn btn-success">Add</button>
                                <a href="{{ route('get-product') }}" class="nav-link">Home</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </x-slot>
</x-layout>