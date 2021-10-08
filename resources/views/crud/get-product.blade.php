<x-layout>
    <x-slot name="title">Get-Product</x-slot>
    <x-slot name="content">

        <div class="container my-3">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Product( {{count($products)}} )</h4>
                        <a href="{{ route('add-product') }}" class="btn btn-success">Add Product</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            @if (session()->has("status"))
            <div class="alert alert-success">
                <strong>{{session("status")}}</strong>
            </div>
            @endif
        </div>
        <div class="container my-4">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-white bg-dark">
                            <th>Id</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->price}}$</td>
                            <td>
                                <a href="{{ route('edit-product',["id"=>$product->id]) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="{{ route('delete-product',["id"=>$product->id]) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @empty
                            <h3 class="text-center">Record Not Found</h3>
                        @endforelse 
                    </tbody>
                </table>
            </div>
        </div>
    </x-slot>
</x-layout>