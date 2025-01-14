<div class="flex flex-row gap-5 self-center text-sm">
    <div>
        <a
            class="font-medium text-blue-600 hover:underline dark:text-blue-500"
            href="{{ route('privacy') }}"
        >
            Privacy Policy 🔐
        </a>
    </div>
    <div>
        <a
            class="font-medium text-blue-600 hover:underline dark:text-blue-500"
            href="{{ route('guide') }}"
        >
            Guide 📋
        </a>
    </div>

    @if (config('meta.links.github'))
        <div>
            <a
                target="_blank"
                class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                href="{{ config('meta.links.github') }}"
            >
                GitHub 🔧
            </a>
        </div>
    @endif

    @if (config('meta.links.issues'))
        <div>
            <a
                target="_blank"
                class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                href="{{ config('meta.links.issues') }}"
            >
                Have Feedback? 💬
            </a>
        </div>
    @endif

    @if (config('meta.links.funding'))
        <div>
            <a
                target="_blank"
                class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                href="{{ config('meta.links.funding') }}"
            >
                Donate 💸
            </a>
        </div>
    @endif
</div>
