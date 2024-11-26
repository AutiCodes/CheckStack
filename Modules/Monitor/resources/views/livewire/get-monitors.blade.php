<div wire:poll.1s>
  @foreach ($monitors as $monitor)
    <!-- IF MONITOR TYPE IS HTTPS -->
    @if ($monitor->type == 1)
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
                <div class="w-2 h-6 bg-green-500 me-1 float-none rounded"></div>
                @break
              @case(0)
                <div class="w-2 h-6 bg-red-500 me-1 float-none rounded"></div>
                @break
            @endswitch
          @endforeach
        </div>

        <div class="clear-both"></div>

        <p class="float-left text-sm">
          1 uur geleden
        </p>

        <p class="float-right text-sm">
          @if (isset($monitor->pulses[0]->created_at))
            {{ explode(' ', $monitor->pulses[0]->created_at)[1] }}
          @else
            Not yet monitored
          @endif
        </p>

        <div class="clear-both"></div>

        <a href="{{ route('monitor.edit', $monitor->id) }}" class="float-left mt-2">
          <img src="media/pencil.png" class="h-4">
        </a>

        <a href="{{ route('monitor.destroy', $monitor->id) }}" class="float-left ml-2 mt-2" onclick="return confirm('Are you sure you want to delete this item?')">
          <img src="media/bin.png" class="h-4">
        </a>

        <div class="clear-both"></div>
      </div>
    @endif

    <!-- IF MONITOR TYPE IS EMAIL -->
    @if ($monitor->type == 2)
      <div class="bg-white rounded-md shadow p-2 mt-2 mb-2">
        <h4 class="float-start text-xl font-bold">
          {{ $monitor->name }}
        </h4>

        <h4 class="float-end text-xl font-bold">
          100% WIP
        </h4>

        <div class="clear-both"></div>

        <!-- uptime bar email in -->
        <h2 class="font-bold">
          Email in
        </h2>
        <!-- uptime bar -->
        <div class="flex flex-row-reverse">
          @foreach ($monitor->pulses->take(60) as $pulse)
            @switch($pulse->up)
              @case(1)
                <div class="w-2 h-6 bg-green-500 me-1 float-none rounded"></div>
                @break
              @case(0)
                <div class="w-2 h-6 bg-red-500 me-1 float-none rounded"></div>
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

        <!-- uptime bar email in -->
        <h2 class="font-bold">
          Email out
        </h2>
        <!-- uptime bar -->
        <div class="flex flex-row-reverse">
          @foreach ($monitor->pulses->take(60) as $pulse)
            @switch($pulse->up)
              @case(1)
                <div class="w-2 h-6 bg-green-500 me-1 float-none rounded"></div>
                @break
              @case(0)
                <div class="w-2 h-6 bg-red-500 me-1 float-none rounded"></div>
                @break
              @case(3)
                <div class="w-2 h-6 bg-blue-500 me-1 float-none rounded"></div>
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

        <!-- uptime bar email in -->
        <h2 class="font-bold">
          Email relay out
        </h2>
        <!-- uptime bar -->
        <div class="flex flex-row-reverse">
          @foreach ($monitor->pulses->take(60) as $pulse)
            @switch($pulse->up)
              @case(1)
                <div class="w-2 h-6 bg-green-500 me-1 float-none rounded"></div>
                @break
              @case(0)
                <div class="w-2 h-6 bg-red-500 me-1 float-none rounded"></div>
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

        <!-- uptime bar email in -->
        <h2 class="font-bold">
          Email forward
        </h2>
        <!-- uptime bar -->
        <div class="flex flex-row-reverse">
          @foreach ($monitor->pulses->take(60) as $pulse)
            @switch($pulse->up)
              @case(1)
                <div class="w-2 h-6 bg-green-500 me-1 float-none rounded"></div>
                @break
              @case(0)
                <div class="w-2 h-6 bg-red-500 me-1 float-none rounded"></div>
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
    @endif
  @endforeach
</div>
