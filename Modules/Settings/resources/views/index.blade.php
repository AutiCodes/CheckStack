@extends('admin::layouts.master')

@section('body')
  <div>
    <div class="container mx-auto mt-3 max-w-prose bg-white p-2 rounded shadow">
      <form action="{{ route('settings.store') }}" method="POST">
        @csrf
        <h1 class="text-2xl font-semibold">
          Notifications
        </h1>

        <h2 class="text-xl font-semibold">
          Email
        </h2>
        <input type="email" name="notification_email" id="default-input" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500 text-black"
          value="{{ $settings[0]->value}}"
        >

        <button type="submit" class="bg-green-500 hover:bg-green-600 p-1 rounded mt-2">
          Save
        </button>
      </form>
    </div>
  </div>
@endsection
