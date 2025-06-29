@extends('crud_operator.index')
@section('content')
    <div class="w-full mt-10">
        <div class="w-[90%] flex justify-between mx-auto items-center py-2">
            <h1 class="font-bold text-2xl text-purple-800">Product List</h1>
            <a href={{ route('product.create') }}
                class="bg-purple-500 text-white py-2 px-3 rounded-lg transition-all duration-200 hover:scale-[1.05] cursor-pointer">
                Add new</a>
        </div>
        <table class="w-[90%] mx-auto ">
            <thead class="bg-purple-200 border-b-2 border-purple-300">
                <tr class="text-center">
                    <th class="p-3 w-25 tracking-wide text-left">Image</th>
                    <th class="p-3 w-35 tracking-wide text-left">Name</th>
                    <th class="p-3 w-25 tracking-wide text-left">Price</th>
                    <th class="p-3 w-25 tracking-wide text-left">Quantity</th>
                    <th class="p-3 tracking-wide text-left w-25">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="bg-purple-100 h-30">
                        <td class="p-4"><img class="w-15 rounded-lg" src={{ $product->image }} alt=""></td>
                        <td class="p-3">{{ $product->product_name }}</td>
                        <td class="p-3">${{ $product->price }}</td>
                        <td class="p-3">{{ $product->quantity }}</td>
                        <td class="p-3">
                            <a href={{ route('product.update' , $product->id) }}>
                                <button
                                    class="bg-purple-600 cursor-pointer transition-all duration-200 hover:scale-[1.05] text-white py-1 px-2 rounded">Edit</button>
                            </a>
                            <a href={{ route('product.destroy',$product->id) }}>
                                <button
                                    class="bg-red-600 cursor-pointer transition-all duration-200 hover:scale-[1.05] text-white py-1 px-2 rounded">Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
