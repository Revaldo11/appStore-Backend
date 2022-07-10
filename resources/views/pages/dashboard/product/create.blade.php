<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product &raquo; Create
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div>

                @if ($errors->any())
                    <div class="px-4 py-2 text-white bg-danger font-bold rounded-t">
                        Theres Something Wrong!
                    </div>
                    <div class="alert alert-danger border border-danger rounded-b">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('dashboard.product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-3/6 px-3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-last-name">Name</label>
                            <input value="{{ old('name') }}" type="text" name="name"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:putline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" placeholder="Product Name">
                        </div>
                        <div class="w-3/6 px-3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-last-name">Price</label>
                            <input value="{{ old('price') }}" type="number" name="price"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:putline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" placeholder="Product Price">
                        </div>
                        <div class="w-3/6 px-3 py-5">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-last-name">Description</label>
                            <input value="{{ old('description') }}" type="text" name="description"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:putline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" placeholder="Product Description">
                        </div>
                        <div class="w-3/6 px-3 py-5">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-last-name">Category</label>
                            <select name="categories_id"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:putline-none focus:bg-white focus:border-gray-500">
                                <option selected disabled>Select Category</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3 text-left">
                            <button class="bg-red-600 px-4 py-2 text-white rounded shadow-lg font-bold hover:bg-red-700"
                                type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
