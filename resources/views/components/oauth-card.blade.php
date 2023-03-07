<div class="mt-4 flex flex-col items-center justify-center">
    <h2 class="text-lg font-medium mb-4">Connectez-vous avec</h2>
    <div class="space-y-4">
        <a href="#" class="bg-blue-500 mx-3 hover:bg-blue-700 text-white py-2 px-4 rounded">
            <span class="sr-only">Se connecter avec Facebook</span>
            <i class="fab fa-facebook"></i>
        </a>
        <a href="#" class="bg-sky-400 mx-3 hover:bg-sky-600 text-white py-2 px-4 rounded">
            <span class="sr-only">Se connecter avec Twitter</span>
            <i class="fab fa-twitter"></i>
        </a>
        <a href="{{ route('google.login') }}" class="bg-red-500 mx-3 hover:bg-red-900 text-white py-2 px-4 rounded">
            <span class="sr-only">Se connecter avec Google</span>
            <i class="fab fa-google"></i>
        </a>
    </div>
</div>
