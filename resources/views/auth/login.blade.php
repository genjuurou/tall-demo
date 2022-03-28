<x-layout title="Login">
    <div class="flex items-center justify-center h-screen p-6 bg-gray-50 dark:bg-zinc-900">
        <div class="flex-1 max-w-md p-12 bg-white rounded-lg shadow-xl text-gray-800 dark:bg-zinc-800 dark:text-zinc-200">
            <header class="pb-6 border-solid border-b border-gray-200 dark:border-zinc-200">
                <x-logo class="text-4xl text-center" />
            </header>
            
            <main class="mt-6">
                <h1 class="text-xl font-semibold">Login</h1>

                @if ($errors->any())
                    <div class="mt-4">
                        <x-alert type="danger" message="Email/password is incorrect." />
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label class="block mt-4 text-sm">
                        <span class="dark:text-zinc-400">Email</span>
                        <input type="email" name="email" class="block w-full mt-1 rounded border-gray-200 focus:border-gray-400 focus:ring focus:ring-gray-300/50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300 dark:focus:border-zinc-400 dark:focus:ring-zinc-300/50" />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="dark:text-zinc-400">Password</span>
                        <input type="password" name="password" class="block w-full mt-1 rounded border-gray-200 focus:border-gray-400 focus:ring focus:ring-gray-300/50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-300 dark:focus:border-zinc-400 dark:focus:ring-zinc-300/50" />
                    </label>
                    <button type="submit" class="block w-full px-4 py-2 mt-4 border rounded border-gray-300 focus:border-gray-500 focus:outline-none focus:ring focus:ring-gray-300/50 hover:border-gray-500 active:text-gray-500 dark:text-zinc-400">Login</button>
                </form>
            </main>
        </div>
    </div>
</x-layout>
