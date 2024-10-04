<footer class="border-t dark:border-gray-800 border-gray-300">
    <div class="mx-auto max-w-7xl overflow-hidden px-6 py-16 sm:py-24 lg:px-8">
        <p class="mt-10 text-xs leading-5 dark:text-slate-400 text-slate-500 sm:text-center">&copy; {{ date('Y') }} {{ config('app.name') }}.</p>
        <p class="text-xs leading-5 dark:text-slate-400 text-slate-500 sm:text-center">{{ $version }}</p>
    </div>

    <livewire:views.create />
</footer>
