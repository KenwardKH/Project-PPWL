<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Members') }}
        </h2>
    </x-slot>
    <style>
        .judul{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 60px;
            margin-top: 60px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <div class="judul">
                            <h1 class="text-4xl font-semibold mb-6">Member List</h1>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">ID</th>
                                        <th class="px-4 py-2">Name</th>
                                        <th class="px-4 py-2">Email</th>
                                        <th class="px-4 py-2">Edit</th>
                                        <th class="px-4 py-2">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members->where('role', 'member') as $user)
                                        <tr>
                                            <td class="border px-4 py-2"><h2 class="text-center">{{ $user->id }}</h2></td>
                                            <td class="border px-4 py-2"><h2 class="text-center">{{ $user->name }}</h2></td>
                                            <td class="border px-4 py-2"><h2 class="text-center">{{ $user->email }}</h2></td>
                                            <td class="border px-4 py-2 text-center">
                                                <a href="{{ route('edit_user', $user->id)}}">
                                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                        Edit
                                                    </button>
                                                </a>
                                                
                                            </td>
                                            <td class="border px-4 py-2 text-center">
                                                <form id="deleteForm_{{ $user->id }}" action="{{ route('delete-user', ['id' => $user->id]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button" onclick="confirmDelete({{ $user->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
<script>
    function confirmDelete(userId) {
        if (confirm('Are you sure you want to delete this user?')) {
            document.getElementById('deleteForm_' + userId).submit();
        }
    }
</script>




