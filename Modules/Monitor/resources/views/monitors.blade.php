@extends('admin::layouts.master')

@section('body')
  <div class="container mx-auto mt-3 max-w-prose">

    <a href="{{ route('monitor.create') }}">
      <button class="bg-green-600 text-white hover:bg-green-700 font-bold py-2 px-2 rounded">
        New monitor
      </button>
    </a>

    <img class="h-28 m-2 mx-auto" src="/media/check.png" alt="Check">

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
        <p class="font-bold">
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

        <p class="ml-2 font-bold text-blue-800">
          90d
        </p>
      </div>
    </span>
    <div class="clear-both"></div>

    <!-- monitor card -->
    <div class="bg-white rounded-md shadow p-2 mt-2 mb-2">
      <h4 class="float-start text-xl font-bold">
        AutiCodes.nl
      </h4>

      <h4 class="float-end text-xl font-bold">
        100%
      </h4>

      <div class="clear-both"></div>

      <!-- uptime bar -->
      <div class="flex">
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
      </div>

      <div class="clear-both"></div>

      <p class="float-left text-sm">
        90 dagen geleden
      </p>

      <p class="float-right text-sm">
        1 minuut geleden
      </p>

      <div class="clear-both"></div>
    </div>


    <!-- monitor card 2-->
    <div class="bg-white rounded-md shadow p-2 mt-2 mb-2">
      <h4 class="float-start text-xl font-bold">
        mail@auticodes.nl
      </h4>

      <h4 class="float-end text-xl font-bold">
        100%
      </h4>

      <div class="clear-both"></div>

      <!-- uptime bar email in -->
      <h2 class="font-bold">
        Email in
      </h2>
      <div class="flex">
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
      </div>

      <div class="clear-both"></div>

      <p class="float-left text-sm">
        90 dagen geleden
      </p>

      <p class="float-right text-sm">
        1 minuut geleden
      </p>

      <div class="clear-both"></div>

      <!-- uptime bar email in -->
      <h2 class="font-bold">
        Email out
      </h2>
      <div class="flex">
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
      </div>

      <div class="clear-both"></div>

      <p class="float-left text-sm">
        90 dagen geleden
      </p>

      <p class="float-right text-sm">
        1 minuut geleden
      </p>

      <div class="clear-both"></div>

      <!-- uptime bar email in -->
      <h2 class="font-bold">
        Email relay out
      </h2>
      <div class="flex">
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
      </div>

      <div class="clear-both"></div>

      <p class="float-left text-sm">
        90 dagen geleden
      </p>

      <p class="float-right text-sm">
        1 minuut geleden
      </p>

      <div class="clear-both"></div>

      <!-- uptime bar email in -->
      <h2 class="font-bold">
        Email forward
      </h2>
      <div class="flex">
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
        <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
      </div>

      <div class="clear-both"></div>

      <p class="float-left text-sm">
        90 dagen geleden
      </p>

      <p class="float-right text-sm">
        1 minuut geleden
      </p>

      <div class="clear-both"></div>
    </div>
  </div>
@endsection
