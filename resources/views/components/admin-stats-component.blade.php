

<div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
    <div class="text-base font-medium group-[.mode--light]:text-white">
        App Stats
    </div>
</div>

<div class="box box--stacked flex flex-col p-5">
    <div class="grid grid-cols-4 gap-5">
        <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
            <div class="text-base text-slate-500">Registered Users</div>
            <div class="mt-1.5 text-2xl font-medium">{{$users?->count()}}</div>

        </div>
        <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
            <div class="text-base text-slate-500">Companies</div>
            <div class="mt-1.5 text-2xl font-medium">{{$companies?->count()}}</div>

        </div>
        <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
            <div class="text-base text-slate-500">Events</div>
            <div class="font-mediumm mt-1.5 text-2xl">{{$events?->count()}}</div>

        </div>
        <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
            <div class="text-base text-slate-500">Request</div>
            <div class="font-mediumm mt-1.5 text-2xl">{{$requests?->unique('user_id')->count()}}</div>

        </div>
    </div>
</div>
