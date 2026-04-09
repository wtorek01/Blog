    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('posts.index') }}" class="text-2xl font-bold text-gray-900 hover:text-indigo-600 transition-colors">
                        📝 Blog
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    @guest
                        <a href="{{ route('login') }}"
                            class="text-gray-700 hover:text-gray-900 px-4 py-2 rounded-md text-sm font-medium">
                            Zaloguj się
                        </a>
                        <a href="{{ route('register') }}"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700">
                            Utwórz konto
                        </a>
                    @else
                        <a href="{{ route('posts.create') }}"
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700">
                            Utwórz post
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit"
                                class="text-gray-700 hover:text-gray-900 px-4 py-2 rounded-md text-sm font-medium">
                                Wyloguj się
                            </button>
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
