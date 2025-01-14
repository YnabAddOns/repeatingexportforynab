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
    </div>
</x-layout>
