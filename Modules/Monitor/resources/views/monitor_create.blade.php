@extends('admin::layouts.master')

@section('body')
  <div class="w-full max-w-lg mx-auto mt-4">
    <form action="{{ route('monitor.store') }}" class="bg-white shawod rounded px-3 pt-6 pb-6 mb-4" method="POST">
      @csrf
      <h1 class="font-bold text-xl">
        New monitor
      </h1>

      <p>
        Monitor type
      </p>
      <div class="inline-block relative w-64">
        <select name="monitor_type" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          <option value=1>
            HTTP(S)
          </option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>

      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
        Name
      </label>
      <input name="name" class="appearance-none block w-full bg-gray-200 border border-red-500 rounded py-3 px-4 mb-3 leading-tight  focus:bg-white" id="url" type="text" placeholder="">

      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
        URL
      </label>
      <input name="url" class="appearance-none block w-full bg-gray-200 border border-red-500 rounded py-3 px-4 mb-3 leading-tight  focus:bg-white" id="url" type="text" placeholder="">

      <p>
        Monitor interval
      </p>
      <div class="inline-block relative w-64">
        <select name="interval" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          <option value=1>
            1 minute
          </option>
          <option value=5>
            5 minutes
          </option>
          <option value=10>
            10 minutes
          </option>
          <option value=60>
            1 hour
          </option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>

      <p>
        Expected status code
      </p>
      <div class="inline-block relative w-64">
        <select name="expected_status_code" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          <option value=200>
            200
          </option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>

      <div class="mt-2">
        <p>
          Notification types
        </p>
        <label class="inline-flex items-center cursor-pointer">
          <input type="checkbox" name="notification_type" value=1 class="sr-only peer">
          <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
          <span class="ms-3 text-sm font-medium text-black">
            Email
          </span>
        </label>
      </div>

      <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold p-2 rounded">
        Add monitor
      </button>
    </form>
  </div>
@endsection
