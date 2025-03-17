<x-layout>
    <div class="px-10 sm:max-w-screen-sm">
        <a
            class="font-medium text-blue-600 hover:underline dark:text-blue-500"
            href="{{ route('home') }}"
        >
            Go Back
        </a>
        <h1 class="mb-4 mt-4 text-4xl">Privacy Policy</h1>
        <p class="mt-2">
            {{ config('app.name') }} does not store any of your data on the
            server or database. It only uses your data to export it to a file.
        </p>
        <p class="mt-2">
            The access token is stored on your browser as an encrypted session
            cookie, which is set to expire every 2 hours (as per YNAB's token
            expiration policy).
        </p>
        <p class="mt-2 font-bold">
            Your data will
            <span class="uppercase">not</span>
            unknowingly be passed to any third-party.
        </p>
        <h1 class="mt-2 text-2xl font-bold">Statement of Affiliation</h1>
        <p class="mt-2">
            We are not affiliated, associated, or in any way officially
            connected with YNAB, or any of its subsidiaries or its affiliates.
        </p>
        <p class="mt-2">
            We are fans of YNAB and wanted to make it easier to work with
            repeating transactions, so we made this tool.
        </p>
        <p class="mt-2">
            The official YNAB website can be found at
            <a class="link" href="https://www.ynab.com" target="_blank">
                https://www.ynab.com
            </a>
            . The names YNAB and You Need A Budget as well as related names,
            marks, emblems and images are registered trademarks of YNAB.
        </p>
    </div>
</x-layout>
