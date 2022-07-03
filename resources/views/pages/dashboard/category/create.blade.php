<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Category &raquo; create
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
                <form action="{{ route('dashboard.category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3">
                            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
                                for="grid-last-name">Name</label>
                            <input type="text" name="name"
                                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:putline-none focus:bg-white focus:border-gray-500"
                                id="grid-last-name" placeholder="Category Name">
                        </div>
                    </div>
                    <div class="flex flex-wrap mb-6 -mx-3">
                        <div class="w-full px-3 text-right">
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
