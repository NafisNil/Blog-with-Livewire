<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
            <div class="space-x-4">
                <x-jet-nav-link href="{{ route('categories.index') }}" :active="request()->routeIs('categories.index')">
                    {{ __('Index') }}
                </x-jet-nav-link>

                <x-jet-nav-link href="{{ route('categories.create') }}" :active="request()->routeIs('categories.create')">
                    {{ __('Create') }}
                </x-jet-nav-link>
            </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <table class="w-full divide-y divide-gray-200">
                <thead class="font-bold text-gray-500 bg-indigo-400">
                    <tr>
                        <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                        </th>

                        <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                            Id
                        </th>

                        <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                            Name
                        </th>

                        <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                            Sub Categories
                        </th>

                        <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                            Created Date
                        </th>

                        <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                            Updated Date
                        </th>

                        <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                            Actions
                        </th>
                    </tr>
                </thead>

                    <tbody class="text-xs divide-y divide-gray-200 bg-indigo-50">
                        @foreach ($categories as $item)
                            
                  
                            <tr>
                                <td class="px-2 py-4 whitespace-nowrap">
                                </td>

                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{$item->id}}
                                </td>
    
                                <td class="px-2 py-4 whitespace-nowrap">
                                   {{$item->name}}
                                </td>
    
                                <td class="px-2 py-4 whitespace-nowrap">
                                    <ul class="flex">
                                        @foreach ($item->subCategories as $subcategories)
                                            <li class="px-2">{{$subcategories->name}},</li>
                                        @endforeach
                                    </ul>
                                </td>
    
                                <td class="px-2 py-4 whitespace-nowrap">
                                   {{$item->created_at->format('m/d/y')}}
                                </td>
    
                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{$item->updated_at->format('m/d/y')}}
                                </td>
    
                                <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">
    
                                    <div class="flex justify-start space-x-1">
    
    
                                        <a href="{{route('categories.edit', $item)}}" class="p-1 border-2 border-indigo-200 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-gray-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
    
                                        <form action="{{ route('categories.delete', $item) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="p-1 border-2 border-red-200 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                              </svg>
                                            </button>

                                        </form>
    
                                    </div>
    
                                </td>
                            </tr>

                            @endforeach
                    </tbody>
               </table>
            </div>
        </div>
    </div>
</x-app-layout>
