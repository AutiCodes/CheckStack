@extends('admin::layouts.master')

@section('body')
  <div class="container mx-auto mt-3 max-w-prose">
    <img class="h-28 m-2 mx-auto" src="/media/check.png" alt="Check">

    <a href="{{ route('monitor.create') }}">
      <button class="bg-green-600 hover:bg-green-700 p-2 rounded">
        Create
      </button>
    </a>

    <div class="text-center">
      <h1 class="text-2xl mx-auto font-bold place-items-center">
        All systems are operational
      </h1>
    </div>

    <h3 class="text-2xl font-bold float-left">
      Live status
    </h3>

    <span class="float-right bg-white rounded-md">
      <div class="flex p-1">
        <p class="font-bold text-blue-800">
          1u
        </p>

        <p class="ml-2 font-bold">
          1d
        </p>

        <p class="ml-2 font-bold">
          1w
        </p>

        <p class="ml-2 font-bold">
          7d
        </p>

        <p class="ml-2 font-bold">
          30d
        </p>

        <p class="ml-2 font-bold ">
          90d
        </p>
      </div>
    </span>
  
    <div class="clear-both"></div>

    <livewire:monitor::get-monitors />



    <footer>
      <div class="w-full mx-auto p-4 md:py-8 place-items-center">
        <p class="">
          Copyricht 2024 LabWatch
        </p>
    </footer>
  </div>
@endsection
