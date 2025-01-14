<form method="POST" action="{{ route('sample.export') }}" class="space-y-2">
    @csrf

    @isset($showQuestion)
        Want to test the export before connecting to YNAB?
    @endisset

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
            class="inline-block rounded border border-gray-600 bg-gray-600 px-12 py-3 text-sm font-medium text-white hover:text-gray-300 focus:outline-none focus:ring active:text-gray-300"
            type="submit"
        >
            Export Sample Transactions
        </button>
    </div>
</form>
