<div class="relative h-48 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
    <div
        class="w-full h-full relative overflow-hidden before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem] after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]">
    </div>
    <div class="absolute inset-x-0 top-0 mx-auto mt-24 h-32 w-32">
        <div class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
            <img src="{{$company?->company_logo}}" alt="codeBrown">
        </div>

        <div class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
        </div>
    </div>
</div>
<div class="rounded-[0.6rem] bg-slate-50 pb-6 pt-12">
    <div class="flex items-center justify-center text-xl font-medium">
        {{$company?->company_name}}
        <i data-tw-merge="" data-lucide="badge-check"
            class="stroke-[1] w-5 h-5 ml-2 fill-blue-500/30 text-blue-500"></i>
    </div>
    <div class="mt-2.5 flex flex-col items-center justify-center gap-x-5 gap-y-2 sm:flex-row">
        <div class="flex items-center text-slate-500">
            <i data-tw-merge="" data-lucide="briefcase" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
            {{$company?->company_sector}}
        </div>
        <div class="flex items-center text-slate-500">
            <i data-tw-merge="" data-lucide="mountain-snow" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
            <a href="#">{{$company?->country ? $company?->country : "Not added
                yet"}}</a>
        </div>
        <div class="flex items-center text-slate-500">
            <i data-tw-merge="" data-lucide="signal" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
            {{$company?->company_phone}}
        </div>
    </div>
</div>
