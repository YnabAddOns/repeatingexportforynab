<x-layout>
    @isset($error)
        <div class="absolute left-0 right-0 top-0 bg-red-500 p-4 text-white">
            {{ $error }}
        </div>
    @endif

    @if ($is_development)
        <div
            class="absolute left-0 right-0 top-0 bg-black p-4 text-center text-white"
        >
            <p>
                This is a devleopment environment meant for testing. You use
                this site at your own risk!
            </p>
            @if ($production_link)
                Head to
                <a
                    class="text-blue-600"
                    href="{{ $production_link }}"
                    target="_blank"
                >
                    {{ $production_link }}
                </a>
                to use the main site.
            @endif
        </div>
    @endif

    @if ($access_token)
        <form method="POST" action="{{ route('export') }}" class="space-y-4">
            @csrf

            <div>
                <label
                    for="file_extension"
                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                >
                    Select a File Extension
                </label>
                <select
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    name="file_extension"
                    id="file_extension"
                >
                    <option value="csv">CSV</option>
                    <option value="excel">Excel</option>
                </select>
            </div>
            <div>
                <button
                    class="inline-block rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring active:text-blue-500"
                    type="submit"
                >
                    Export Transactions
                </button>
            </div>
        </form>
    @else
        <a
            class="inline-block rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring active:text-blue-500"
            href="{{ $auth_url }}"
        >
            Authenticate YNAB
        </a>
    @endif

    <div class="mt-4 flex flex-col justify-center space-y-2 text-center">
        <button
            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
            type="button"
            data-te-collapse-init
            data-te-ripple-init
            data-te-ripple-color="light"
            data-te-target="#collapseExample"
            aria-expanded="false"
            aria-controls="collapseExample"
        >
            Want to test the export before connecting to YNAB?
        </button>
        <div class="!visible hidden" id="collapseExample" data-te-collapse-item>
            <div
                class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 dark:text-neutral-50"
            >
                <x-sample-export></x-sample-export>
            </div>
        </div>

        <hr class="border-gray-300 dark:border-gray-700" />

        <x-links></x-links>
    </div>
</x-layout>
