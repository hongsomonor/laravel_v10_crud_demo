@extends('crud_operator.index')
@section('content')
    <div class="w-full mt-10">
        <form action="" method="POST"
            class="w-[45%] mx-auto bg-purple-900 rounded-2xl px-10 pt-5 pb-10 shadow-lg gap-3 flex flex-col">
            <h1 class="text-purple-200 text-center py-1 font-bold text-2xl">Add Product</h1>
            <div class="  flex flex-col w-[90%] mx-auto gap-2">
                <label for="product_name" class="text-xl font-bold text-purple-300">Name</label>
                <input class=" bg-purple-300 w-full py-3 px-2 border-0 text-purple-800 font-bold rounded-lg shadow-md"
                    type="text" name="product_name" placeholder="Name">
            </div>
            <div class=" flex flex-col w-[90%] mx-auto gap-2">
                <label for="product_name" class="text-xl font-bold text-purple-300">Quantity</label>
                <input class="bg-purple-300 w-full py-3 px-2 border-0 font-bold text-purple-800 rounded-lg shadow-md"
                    type="number" name="product_name" placeholder="Quantity">
            </div>
            <div class=" flex flex-col w-[90%] mx-auto gap-2">
                <label for="product_name" class="text-xl font-bold text-purple-300">Price</label>
                <input class="bg-purple-300 font-bold text-purple-800 w-full py-3 px-2 border-0 rounded-lg shadow-md"
                    type="number" name="product_name" placeholder="Price">
            </div>
            <div class=" flex flex-col w-[90%] mx-auto gap-2">
                <label for="product_name" class="text-xl font-bold text-purple-300">Description</label>
                <textarea class="bg-purple-300 h-30 font-bold text-purple-800 w-full py-3 px-2 border-0 rounded-lg shadow-md"
                    type="number" name="product_name"> </textarea>
            </div>
            <div class="w-[90%] mx-auto mt-3 flex justify-between">
                <button
                    class="bg-purple-500 text-purple-100 cursor-pointer py-2 px-10 transition-all duration-[0.3s] hover:scale-[1.05] rounded-xl font-bold">Save</button>
                <button
                    class="bg-red-600 text-purple-100 py-2 px-10 rounded-xl cursor-pointer transition-all duration-[0.3s] hover:scale-[1.05] font-bold">Cancel</button>
            </div>
        </form>
    </div>
@endsection
