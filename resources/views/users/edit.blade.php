<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl">
            Update Your Profile Information
        </h1>
    </x-slot>
    <x-container>
        <div class="flex">
            <div class="w-full lg:w-1/2">
                <x-card>
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-5">
                            <x-label for="username">Username</x-label>
                            <x-input class="mt-1 w-full" type="text" name="username" id="username"
                                value="{{ old('username', Auth::user()->username) }}" />
                            @error('username')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="email">Email</x-label>
                            <x-input class="mt-1 w-full" type="email" name="email" id="email"
                                value="{{ old('email', Auth::user()->email) }}" />
                            @error('email')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="name">Name</x-label>
                            <x-input class="mt-1 w-full" type="text" name="name" id="name"
                                value="{{ old('name', Auth::user()->name) }}" />
                            @error('name')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                        <x-button>Update</x-button>
                    </form>
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>