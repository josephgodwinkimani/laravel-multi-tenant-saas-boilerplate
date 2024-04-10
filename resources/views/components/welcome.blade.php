<div
    class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Welcome {{ Auth::user()->name }}!
    </h1>

    <p class="mt-6 mb-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        Laravel Jetstream + Livewire + WireUI + Spatie Multi-Tenancy + Livewire Charts
    </p>

    <div class="w-full mb-4 md:mb-0 md:w-1/2 md:flex space-y-4 md:space-y-0 md:space-x-2">
        <x-card color="bg-indigo-500 text-gray-900">
            <h1 class="text-gray-900 text-2xl font-medium dark:text-white">$190</h1>
            <p class="text-white dark:text-white leading-relaxed">Revenue </p>
        </x-card>

        <x-card color="bg-teal-500 text-gray-900">
            <h1 class="text-gray-900 text-2xl font-medium dark:text-white">2598</h1>
            <p class="text-white dark:text-white leading-relaxed">Customers </p>
        </x-card>
    </div>

    <div class="w-full h-full mt-4">
        <livewire:dashboard.charts />
    </div>
</div>