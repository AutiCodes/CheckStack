@extends('statuspage::layouts.master')

@section('content')
  <div class="container mx-auto mt-3 max-w-prose">
    <h1 class="mx-auto float-start font-extrabold text-4xl">
      LabWatch
    </h1>

    <h1 class="mx-auto float-end font-extrabold text-4xl">
      Placeholder
    </h1>

    <div class="clear-both"></div>

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

    @foreach ($monitors as $monitor)
      <!-- monitor card -->
      <div class="bg-white rounded-md shadow p-2 mt-2 mb-2">
        <h4 class="float-start text-xl font-bold">
          {{ $monitor->name }}
        </h4>

        <h4 class="float-end text-xl font-bold">
          100% w.i.p
        </h4>

        <div class="clear-both"></div>

        <!-- uptime bar -->
        <div class="flex flex-row-reverse">
          @foreach ($monitor->pulses->take(60) as $pulse)
            @switch($pulse->up)
              @case(1)
                <div class="w-1 h-6 bg-green-500 me-1 float-none"></div>
                @break
              @case(0)
                <div class="w-1 h-6 bg-red-500 me-1 float-none"></div>
                @break
            @endswitch
          @endforeach
        </div>

        <div class="clear-both"></div>

        <p class="float-left text-sm">
          1 uur geleden
        </p>

        <p class="float-right text-sm">
          1 minuut geleden
        </p>

        <div class="clear-both"></div>
      </div>
    @endforeach

    <!-- monitor card 2-->
    <div class="bg-white rounded-md shadow p-2 mt-2 mb-2">
      <h4 class="float-start text-xl font-bold">
        mail@auticodes.nl (W.I.P)
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

    <footer>
      <div class="w-full mx-auto p-4 md:py-8 place-items-center">
        <p class="">
          Copyricht 2024 LabWatch
        </p>
    </footer>
  </div>
@endsection
