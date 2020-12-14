<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/alpine.js') }}" defer></script>
</head>

<body class="antialiased">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <form action="{{ route('form_submit') }}" method="post" x-data="{ backAfterSaveStatus: 0 }" x-ref="foo">
            @csrf
            <input type="hidden" name="backAfterSave" x-model.number="backAfterSaveStatus">

            <div class="space-x-2">
                <button class="px-4 py-2 font-semibold text-gray-800 rounded-md hover:bg-gray-100"
                    x-on:click.prevent="backAfterSaveStatus = 1; $nextTick(() => { $refs.foo.submit() })"
                    type="submit"
                >
                    Save &amp; Back
                </button>
                <button class="px-4 py-2 font-semibold text-gray-800 bg-gray-100 border border-gray-300 rounded-md shadow-md hover:bg-gray-200"
                    x-on:click.prevent="$refs.foo.submit()"
                    type="submit"
                >
                    Save
                </button>
            </div>
        </form>
    </div>
</body>

</html>
