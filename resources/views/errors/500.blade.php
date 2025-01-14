<div class="content">
    <div class="title">Something went wrong.</div>

    @if (app()->bound('sentry') && app('sentry')->getLastEventId())
        <div class="subtitle">
            Error ID: {{ app('sentry')->getLastEventId() }}
        </div>
        <script>
            Sentry.init({
                dsn: {{ config('sentry.dsn') }},
            });
            Sentry.showReportDialog({
                eventId: '{{ app('sentry')->getLastEventId() }}',
            });
        </script>
    @endif
</div>
