<x-app-layout>


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
            <div class="mt-16 px-5">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                        <div class="col-span-12">


                            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                <div class="text-base font-medium group-[.mode--light]:text-dark">
                                    Create Free Time
                                </div>

                            </div>


                            <div class="mt-3.5 flex flex-col gap-8">

                                <div class="box box--stacked flex flex-col">
                                    <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="relative">
                                                <i data-tw-merge="" data-lucide="search"
                                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                <input data-tw-merge="" type="text" placeholder="Search users..."
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-[0.5rem] pl-9 sm:w-64">
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                            {{-- <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 w-full sm:w-auto"><i data-tw-merge="" data-lucide="download" class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                Export
                                                <i data-tw-merge="" data-lucide="chevron-down" class="ml-2 h-4 w-4 stroke-[1.3]"></i></button>
                                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-bar-chart" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        PDF</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-bar-chart" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        CSV</a>
                                                </div>
                                            </div>
                                            </div> --}}

                                        </div>
                                    </div>

                                    <div class="overflow-auto xl:overflow-visible">
                                        <table class="w-full text-left border-b border-slate-200/60">
                                            <thead>
                                                <tr>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        No.</td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Client Email</td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Day</td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Start Time</td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        End Time</td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                        Status</td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Notes</td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Send mail</td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Booked Date</td>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @forelse ($clientformeets as $booking)
                                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-darkmode-700">
                                                        <!-- Number -->
                                                        <td class="px-5 border-b border-dashed py-4">
                                                            {{ $loop->iteration }}
                                                        </td>

                                                        <!-- Client Email -->
                                                        <td class="px-5 border-b border-dashed py-4">
                                                            <span class="font-medium">
                                                                {{ $booking->email }}
                                                            </span>
                                                        </td>

                                                        <!-- Day -->
                                                        <td class="px-5 border-b border-dashed py-4">
                                                            <span class="font-medium">
                                                                {{ $booking->starts_at?->format('l') ?? 'N/A' }}
                                                            </span>
                                                        </td>

                                                        <!-- Start Time -->
                                                        <td class="px-5 border-b border-dashed py-4">
                                                            {{ $booking->starts_at ? $booking->starts_at->format('d M Y, g:i A') : 'N/A' }}
                                                        </td>

                                                        <!-- End Time -->
                                                        <td class="px-5 border-b border-dashed py-4">
                                                            {{ $booking->ends_at ? $booking->ends_at->format('d M Y, g:i A') : 'N/A' }}
                                                        </td>

                                                        <!-- Status -->
                                                        <td class="px-5 border-b border-dashed py-4 text-center">
                                                            @if ($booking->status === 'confirmed')
                                                                <span
                                                                    class="inline-flex items-center rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                                                                    Confirmed
                                                                </span>
                                                            @elseif ($booking->status === 'pending')
                                                                <span
                                                                    class="inline-flex items-center rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700">
                                                                    Pending
                                                                </span>
                                                            @elseif ($booking->status === 'cancelled')
                                                                <span
                                                                    class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">
                                                                    Cancelled
                                                                </span>
                                                            @else
                                                                <span
                                                                    class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-700">
                                                                    {{ ucfirst($booking->status) }}
                                                                </span>
                                                            @endif
                                                        </td>

                                                        <!-- Notes -->
                                                        <td class="px-5 border-b border-dashed py-4">
                                                            <button type="button"
                                                                onclick="showNoteModal(@js($booking->notes ?: 'No notes'))"
                                                                style="cursor:pointer; color:#E94E1B; background:none;
               border:none; padding:0; text-align:left;">
                                                                {{ Str::limit($booking->notes ?: 'No notes', 10) }}
                                                            </button>
                                                        </td>

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            <select
                                                                onchange="handleMailOption(this)"
                                                                style="padding:8px 12px; border:1px solid #ddd; background:#fff;
                                                                    color:#333; font-size:13px; cursor:pointer; width:150px;">

                                                                <option value="">Choose an option</option>
                                                                
                                                                <option value="custom">Custom New Mail To Send</option>

                                                            </select>
                                                        </td>

                                                        

                                                        <!-- Created Date -->
                                                        <td class="px-5 border-b border-dashed py-4">
                                                            <div class="font-medium">
                                                                {{ $booking->created_at?->format('d M Y') ?? 'N/A' }}
                                                            </div>
                                                            <div class="mt-0.5 text-xs text-slate-500">
                                                                {{ $booking->created_at?->diffForHumans() ?? '' }}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="8" class="px-5 py-8 text-center text-slate-500">
                                                            No client bookings have been created yet.
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>



                                        <!-- Custom Mail Modal -->
                                        <div id="customMailModal"
                                            data-chat-url="{{ route('ai.custom-mail.chat') }}"
                                            style="display:none; position:fixed; z-index:9999; inset:0;
                                            width:100%; height:100%; background:rgba(0,0,0,0.65);
                                            align-items:center; justify-content:center; padding:15px;
                                            box-sizing:border-box;">

                                            <div style="background:#fff; width:100%; max-width:760px;
                                                max-height:95vh; overflow-y:auto; padding:25px;
                                                box-sizing:border-box; position:relative;">

                                                <button type="button" onclick="closeCustomMailModal()"
                                                    aria-label="Close"
                                                    style="position:absolute; top:12px; right:15px;
                                                    border:none; background:none; font-size:25px;
                                                    cursor:pointer; color:#555;">
                                                    &times;
                                                </button>

                                                <h3 style="margin:0 0 6px; color:#222; font-size:20px;">
                                                    Compose Custom Mail
                                                </h3>

                                                <p style="font-size:13px; color:#777; margin:0 0 20px;">
                                                    Write your email yourself or work with the AI assistant.
                                                </p>

                                                <!-- AI Chatbox -->
                                                <div style="border:1px solid #e5e5e5; margin-bottom:22px;">

                                                    <div style="padding:13px 15px; background:#171717;
                                                        color:#fff; display:flex; align-items:center; gap:9px;">
                                                        <span style="color:#E94E1B; font-size:18px;">✦</span>
                                                        <strong style="font-size:14px;">AI Email Assistant</strong>
                                                        <span style="margin-left:auto; font-size:11px; color:#ccc;">
                                                            Drafting helper
                                                        </span>
                                                    </div>

                                                    <div id="aiMailMessages"
                                                        aria-live="polite"
                                                        style="height:220px; overflow-y:auto; padding:15px;
                                                        display:flex; flex-direction:column; gap:12px;
                                                        background:#fafafa;">

                                                        <div style="align-self:flex-start; max-width:90%;
                                                            padding:11px 13px; background:#fff;
                                                            border:1px solid #e5e5e5; color:#333;
                                                            font-size:13px; line-height:1.6;">
                                                            Hi! Tell me what email you want to write.
                                                            I can help draft it and refine it with you.
                                                        </div>

                                                    </div>

                                                    <div style="padding:12px; border-top:1px solid #e5e5e5;
                                                        background:#fff;">

                                                        <div style="display:flex; gap:8px; align-items:stretch;">
                                                            <input type="text" id="aiMailInput"
                                                                placeholder="e.g. Write a polite meeting confirmation..."
                                                                onkeydown="if(event.key === 'Enter'){event.preventDefault();sendAiMessage();}"
                                                                style="flex:1; min-width:0; padding:11px;
                                                                border:1px solid #ddd; font-size:13px;">

                                                            <button type="button" id="aiMailSendButton"
                                                                onclick="sendAiMessage()"
                                                                style="padding:10px 16px; border:none;
                                                                background:#E94E1B; color:#fff; cursor:pointer;">
                                                                Send
                                                            </button>
                                                        </div>

                                                        <div style="display:flex; justify-content:space-between;
                                                            align-items:center; gap:10px; margin-top:12px;">

                                                            <span style="font-size:11px; color:#888;">
                                                                Review the draft before sending your email.
                                                            </span>

                                                            <button type="button" id="useAiDraftButton"
                                                                onclick="useAiMailDraft()" disabled
                                                                style="padding:9px 12px; border:1px solid #E94E1B;
                                                                background:#fff; color:#E94E1B; cursor:pointer;
                                                                opacity:0.5; white-space:nowrap;">
                                                                Use This Draft
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Existing Email Fields -->
                                                <form id="customMailForm" onsubmit="submitCustomMail(event)">

                                                    <div style="margin-bottom:18px;">
                                                        <label for="customMailSubject"
                                                            style="display:block; font-size:13px;
                                                            font-weight:600; color:#333; margin-bottom:7px;">
                                                            Subject
                                                        </label>

                                                        <input type="text" id="customMailSubject"
                                                            placeholder="Enter email subject" required
                                                            style="width:100%; box-sizing:border-box;
                                                            padding:12px; border:1px solid #ddd;
                                                            outline:none; font-size:14px;">
                                                    </div>

                                                    <div style="margin-bottom:22px;">
                                                        <label for="customMailBody"
                                                            style="display:block; font-size:13px;
                                                            font-weight:600; color:#333; margin-bottom:7px;">
                                                            Message Body
                                                        </label>

                                                        <textarea id="customMailBody"
                                                            placeholder="Your email message will appear here..."
                                                            required rows="7"
                                                            style="width:100%; box-sizing:border-box;
                                                            padding:12px; border:1px solid #ddd;
                                                            outline:none; font-size:14px; resize:vertical;
                                                            font-family:Arial,sans-serif;"></textarea>
                                                    </div>

                                                    {{-- <div style="display:flex; justify-content:flex-end; gap:10px;">
                                                        <button type="button" onclick="closeCustomMailModal()"
                                                            style="padding:11px 18px; border:1px solid #ddd;
                                                            background:#fff; color:#333; cursor:pointer;">
                                                            Cancel
                                                        </button>

                                                        <button type="submit"
                                                            style="padding:11px 20px; border:none;
                                                            background:#E94E1B; color:#fff; cursor:pointer;">
                                                            Send Mail
                                                        </button>
                                                    </div> --}}

                                                    <td class="px-5 border-b border-dashed py-4">
                                                        <select
                                                            onchange="handleMailOption(this)"
                                                            style="padding:8px 12px; border:1px solid #ddd;
                                                            background:#fff; color:#333; font-size:13px;
                                                            cursor:pointer; width:180px;">

                                                            <option value="">Choose an option</option>
                                                            <option value="send">Send Mail Now</option>
                                                            <option value="custom">Custom New Mail To Send</option>
                                                        </select>
                                                    </td>

                                                </form>
                                            </div>
                                        </div>


                                    <!-- Note Modal -->
                                    <div id="noteModal"
                                        style="display:none; position:fixed; z-index:9999; left:0; top:0;
           width:100%; height:100%; overflow:auto;
           background-color:rgba(0,0,0,0.5);">

                                        <div
                                            style="background-color:#fff; margin:10% auto; padding:25px;
                border:1px solid #ccc; width:90%; max-width:500px;
                box-sizing:border-box; position:relative; color:#333;">

                                            <span onclick="closeNoteModal()"
                                                style="position:absolute; top:10px; right:18px; color:#777;
                   font-size:28px; font-weight:bold; cursor:pointer;">
                                                &times;
                                            </span>

                                            <h2 style="margin:0 0 15px; font-size:22px;">
                                                Booking Note
                                            </h2>

                                            <hr style="border:0; border-top:1px solid #ddd; margin-bottom:20px;">

                                            <p id="fullNote"
                                                style="white-space:pre-wrap; overflow-wrap:anywhere;
                   line-height:1.7; max-height:300px; overflow-y:auto;
                   margin-bottom:20px;">
                                            </p>

                                            <div style="text-align:right; border-top:1px solid #ddd; padding-top:15px;">
                                                <button type="button" onclick="closeNoteModal()"
                                                    style="background-color:#E94E1B; color:#fff; border:none;
                       padding:10px 20px; cursor:pointer;">
                                                    Close
                                                </button>
                                            </div>

                                        </div>
                                    </div>


                                    <!-- Custom Mail Modal -->
                                    <div id="customMailModal"
                                        style="display:none; position:fixed; z-index:9999; left:0; top:0;
                                        width:100%; height:100%; background:rgba(0,0,0,0.65);
                                        align-items:center; justify-content:center; padding:15px; box-sizing:border-box;">

                                        <div style="background:#fff; width:100%; max-width:550px;
                                            padding:25px; box-sizing:border-box; position:relative;">

                                            <button type="button" onclick="closeCustomMailModal()"
                                                style="position:absolute; top:12px; right:15px; border:none;
                                                background:none; font-size:25px; cursor:pointer; color:#555;">
                                                &times;
                                            </button>

                                            <h3 style="margin:0 0 8px; color:#222; font-size:20px;">
                                                Compose Custom Mail
                                            </h3>

                                            <p style="font-size:13px; color:#777; margin-bottom:22px;">
                                                Write the subject and message you want to send.
                                            </p>

                                            <form id="customMailForm" onsubmit="submitCustomMail(event)">

                                                <div style="margin-bottom:18px;">
                                                    <label for="customMailSubject"
                                                        style="display:block; font-size:13px; font-weight:600;
                                                        color:#333; margin-bottom:7px;">
                                                        Subject
                                                    </label>

                                                    <input type="text" id="customMailSubject"
                                                        placeholder="Enter email subject" required
                                                        style="width:100%; box-sizing:border-box; padding:12px;
                                                        border:1px solid #ddd; outline:none; font-size:14px;">
                                                </div>

                                                <div style="margin-bottom:22px;">
                                                    <label for="customMailBody"
                                                        style="display:block; font-size:13px; font-weight:600;
                                                        color:#333; margin-bottom:7px;">
                                                        Message Body
                                                    </label>

                                                    <textarea id="customMailBody"
                                                        placeholder="Write your message here..." required rows="7"
                                                        style="width:100%; box-sizing:border-box; padding:12px;
                                                        border:1px solid #ddd; outline:none; font-size:14px;
                                                        resize:vertical; font-family:Arial, sans-serif;"></textarea>
                                                </div>

                                                <div style="display:flex; justify-content:flex-end; gap:10px;">
                                                    <button type="button" onclick="closeCustomMailModal()"
                                                        style="padding:11px 18px; border:1px solid #ddd;
                                                        background:#fff; color:#333; cursor:pointer;">
                                                        Cancel
                                                    </button>

                                                    <button type="submit"
                                                        style="padding:11px 20px; border:none;
                                                        background:#E94E1B; color:#fff; cursor:pointer;">
                                                        Send Mail
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>


                                    <div
                                        class="flex-reverse flex flex-col-reverse flex-wrap items-center gap-y-2 p-5 sm:flex-row">
                                        <nav class="mr-auto w-full flex-1 sm:w-auto">
                                            <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevrons-left"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevron-left"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevron-right"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevrons-right"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <select data-tw-merge=""
                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] sm:w-20">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    @section('script')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Add click event to all Edit buttons
                document.querySelectorAll(".toggle-edit").forEach(function(button) {
                    button.addEventListener("click", function() {
                        const id = this.getAttribute("data-id"); // Get the unique ID for the row
                        const showElement = document.getElementById(`show-${id}`);
                        const hideElement = document.getElementById(`hide-${id}`);

                        // Toggle visibility
                        if (showElement.style.display === "none") {
                            showElement.style.display = "";
                            hideElement.style.display = "none";
                        } else {
                            showElement.style.display = "none";
                            hideElement.style.display = "";
                        }
                    });
                });
            });
        </script>

        <script>
            function showNoteModal(note) {
                document.getElementById('fullNote').textContent = note;
                document.getElementById('noteModal').style.display = 'block';
            }

            function closeNoteModal() {
                document.getElementById('noteModal').style.display = 'none';
            }

            // Close when clicking outside the modal
            window.addEventListener('click', function(event) {
                const modal = document.getElementById('noteModal');

                if (event.target === modal) {
                    closeNoteModal();
                }
            });

            // Close when pressing Escape
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeNoteModal();
                }
            });
        </script>

        <script>
            function handleMailOption(select) {
                const option = select.value;

                if (option === 'send') {
                    alert('Send Mail Now selected');
                    // Add the predefined mail action here later.
                }

                if (option === 'custom') {
                    document.getElementById('customMailModal').style.display = 'flex';
                }

                // Reset dropdown so another option can be selected later.
                select.value = '';
            }

            function closeCustomMailModal() {
                document.getElementById('customMailModal').style.display = 'none';
            }

            function submitCustomMail(event) {
                event.preventDefault();

                const subject = document.getElementById('customMailSubject').value.trim();
                const body = document.getElementById('customMailBody').value.trim();

                if (!subject || !body) {
                    alert('Please enter both a subject and a message.');
                    return;
                }

                // Frontend only: no email is sent yet.
                alert('Your custom mail is ready to send!');

                console.log({
                    subject: subject,
                    body: body
                });

                closeCustomMailModal();
            }

            // Close the modal when clicking the dark background.
            document.getElementById('customMailModal').addEventListener('click', function(event) {
                if (event.target === this) {
                    closeCustomMailModal();
                }
            });




            
        </script>


    <script>


        let aiMailMessages = [];
        let latestAiMailDraft = null;

        function handleMailOption(select) {
            const option = select.value;

            if (option === 'send') {
                alert('Send Mail Now selected');
                // Connect your predefined email action here later.
            }

            if (option === 'custom') {
                resetAiMailAssistant();

                document.getElementById('customMailModal').style.display = 'flex';
                setTimeout(() => document.getElementById('aiMailInput').focus(), 100);
            }

            select.value = '';
        }

        function appendChatMessage(role, message) {
            const container = document.getElementById('aiMailMessages');
            const bubble = document.createElement('div');

            bubble.style.alignSelf = role === 'user' ? 'flex-end' : 'flex-start';
            bubble.style.maxWidth = '90%';
            bubble.style.padding = '11px 13px';
            bubble.style.fontSize = '13px';
            bubble.style.lineHeight = '1.6';
            bubble.style.whiteSpace = 'pre-wrap';
            bubble.style.overflowWrap = 'anywhere';
            bubble.style.background = role === 'user' ? '#E94E1B' : '#fff';
            bubble.style.color = role === 'user' ? '#fff' : '#333';
            bubble.style.border = role === 'user' ? 'none' : '1px solid #e5e5e5';

            // Use textContent so chat responses are displayed as text, not HTML.
            bubble.textContent = message;

            container.appendChild(bubble);
            container.scrollTop = container.scrollHeight;

            return bubble;
        }

        function resetAiMailAssistant() {
            aiMailMessages = [];
            latestAiMailDraft = null;

            document.getElementById('aiMailMessages').innerHTML = '';

            appendChatMessage(
                'assistant',
                'Hi! Tell me what email you want to write. I can draft it and help you refine it.'
            );

            const draftButton = document.getElementById('useAiDraftButton');
            draftButton.disabled = true;
            draftButton.style.opacity = '0.5';
        }

        async function sendAiMessage() {
            const input = document.getElementById('aiMailInput');
            const sendButton = document.getElementById('aiMailSendButton');
            const message = input.value.trim();

            if (!message || sendButton.disabled) return;

            aiMailMessages.push({
                role: 'user',
                content: message
            });

            // Keep the request history within the controller's message limit.
            aiMailMessages = aiMailMessages.slice(-12);

            appendChatMessage('user', message);
            input.value = '';
            sendButton.disabled = true;
            sendButton.textContent = 'Thinking...';

            const loadingBubble = appendChatMessage('assistant', 'Working on your email...');

            try {
                const modal = document.getElementById('customMailModal');
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

                if (!csrfToken) {
                    throw new Error('CSRF token not found. Check your Blade layout.');
                }

                const response = await fetch(modal.dataset.chatUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        messages: aiMailMessages,
                        current_subject: document.getElementById('customMailSubject').value,
                        current_body: document.getElementById('customMailBody').value
                    })
                });

                const data = await response.json();

                if (!response.ok) {
                    throw new Error(data.message || 'The AI assistant could not respond.');
                }

                loadingBubble.remove();

                // Store the full response in the conversation so the AI
                // can remember the latest draft when the user requests edits.
                aiMailMessages.push({
                    role: 'assistant',
                    content: JSON.stringify(data)
                });

                appendChatMessage('assistant', data.reply);

                if (data.subject || data.body) {
                    latestAiMailDraft = {
                        subject: data.subject || '',
                        body: data.body || ''
                    };

                    const draftButton = document.getElementById('useAiDraftButton');
                    draftButton.disabled = false;
                    draftButton.style.opacity = '1';
                }
            } catch (error) {
                loadingBubble.remove();
                appendChatMessage('assistant', error.message || 'Something went wrong. Please try again.');

                // Remove the failed user turn from the stored conversation.
                if (aiMailMessages.at(-1)?.role === 'user') {
                    aiMailMessages.pop();
                }
            } finally {
                sendButton.disabled = false;
                sendButton.textContent = 'Send';
                input.focus();
            }
        }

        function useAiMailDraft() {
            if (!latestAiMailDraft) return;

            const subjectField = document.getElementById('customMailSubject');
            const bodyField = document.getElementById('customMailBody');

            subjectField.value = latestAiMailDraft.subject;
            bodyField.value = latestAiMailDraft.body;

            appendChatMessage(
                'assistant',
                'Draft added to the email fields. You can edit either field before sending.'
            );

            subjectField.focus();
        }

        function closeCustomMailModal() {
            document.getElementById('customMailModal').style.display = 'none';
        }

        // Frontend-only send handler, retained until you connect actual mail sending.
        function submitCustomMail(event) {
            event.preventDefault();

            const subject = document.getElementById('customMailSubject').value.trim();
            const body = document.getElementById('customMailBody').value.trim();

            if (!subject || !body) {
                alert('Please enter both a subject and a message.');
                return;
            }

            alert('Your email draft is ready. Actual email sending is not connected yet.');

            console.log({ subject, body });

            closeCustomMailModal();
        }

        // Close when the user clicks outside the popup.
        document.getElementById('customMailModal').addEventListener('click', function(event) {
            if (event.target === this) {
                closeCustomMailModal();
            }
        });

    </script>
    @endsection

</x-app-layout>
