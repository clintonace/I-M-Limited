<x-app-layout>


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
            <div class="mt-16 px-5">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                        <div class="col-span-12">


                            <div class="mt-3.5 flex flex-col gap-8">

                                <div class="box box--stacked flex flex-col">
                                    <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="relative">
                                                {{-- <i data-tw-merge="" data-lucide="search"
                                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"></i> --}}
                                                <h1>List of clients with questions.</h1>
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
                                                        No.
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Email
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Question
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Date Asked
                                                    </td>
                                                    <td
                                                        class="px-5 border-b border-t bg-slate-50 py-4 font-medium text-slate-500">
                                                        Actions
                                                    </td>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @forelse ($questions as $question)
                                                    <tr class="hover:bg-slate-50/50 dark:hover:bg-darkmode-700">

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            {{ $loop->iteration }}
                                                        </td>

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            <a href="mailto:{{ $question->email }}"
                                                                class="font-medium text-success hover:underline">
                                                                {{ $question->email }}
                                                            </a>
                                                        </td>

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            {{ \Illuminate\Support\Str::limit($question->message, 80) }}
                                                        </td>

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            <div class="font-medium">
                                                                {{ $question->created_at?->format('d M Y') ?? 'N/A' }}
                                                            </div>
                                                            <div class="mt-0.5 text-xs text-slate-500">
                                                                {{ $question->created_at?->diffForHumans() ?? '' }}
                                                            </div>
                                                        </td>

                                                        <td class="px-5 border-b border-dashed py-4">
                                                            <button type="button"
                                                                onclick="openQuestionModal('question-modal-{{ $question->id }}')"
                                                                class="text-primary hover:underline">
                                                                View
                                                            </button>
                                                        </td>

                                                    </tr>

                                                    <!-- View Question Modal -->
                                                    <div id="question-modal-{{ $question->id }}" class="question-modal"
                                                        style="display:none; position:fixed; z-index:9999; inset:0;
                                                        width:100%; height:100%; background:rgba(0,0,0,0.65);
                                                        align-items:center; justify-content:center; padding:15px;
                                                        box-sizing:border-box;">

                                                        <div style="background:#fff; width:100%; max-width:420px;
                                                            max-height:90vh; overflow-y:auto; padding:22px;
                                                            border-radius:8px; box-sizing:border-box; position:relative;">

                                                            <button type="button"
                                                                onclick="closeQuestionModal('question-modal-{{ $question->id }}')"
                                                                aria-label="Close"
                                                                style="position:absolute; top:10px; right:14px;
                                                                border:none; background:none; font-size:24px;
                                                                cursor:pointer; color:#555;">
                                                                &times;
                                                            </button>

                                                            <h3 style="margin:0 0 16px; color:#222; font-size:18px;">
                                                                Question
                                                            </h3>

                                                            <div class="space-y-4 text-left">
                                                                <div>
                                                                    <div class="mb-1 text-xs text-slate-500">From</div>
                                                                    <div class="font-medium text-slate-800">{{ $question->email }}</div>
                                                                </div>

                                                                <div>
                                                                    <div class="mb-1 text-xs text-slate-500">Date Asked</div>
                                                                    <div>{{ $question->created_at?->format('d M Y, g:i A') ?? 'N/A' }}</div>
                                                                </div>

                                                                <div>
                                                                    <div class="mb-1 text-xs text-slate-500">Question</div>
                                                                    <div class="whitespace-pre-line text-slate-800">{{ $question->message }}</div>
                                                                </div>
                                                            </div>

                                                            <div style="display:flex; justify-content:flex-end; gap:10px; margin-top:22px;">
                                                                <button type="button"
                                                                    onclick="closeQuestionModal('question-modal-{{ $question->id }}')"
                                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-4 rounded-md font-medium cursor-pointer">
                                                                    Close
                                                                </button>

                                                                <button type="button"
                                                                    onclick="openReplyModal({{ $question->id }})"
                                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-4 rounded-md font-medium cursor-pointer bg-primary border-primary text-white">
                                                                    Reply
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Reply Mail Modal -->
                                                    <div id="reply-modal-{{ $question->id }}" class="question-modal"
                                                        style="display:none; position:fixed; z-index:9999; inset:0;
                                                        width:100%; height:100%; background:rgba(0,0,0,0.65);
                                                        align-items:center; justify-content:center; padding:15px;
                                                        box-sizing:border-box;">

                                                        <div style="background:#fff; width:100%; max-width:480px;
                                                            max-height:90vh; overflow-y:auto; padding:22px;
                                                            border-radius:8px; box-sizing:border-box; position:relative;">

                                                            <button type="button"
                                                                onclick="closeQuestionModal('reply-modal-{{ $question->id }}')"
                                                                aria-label="Close"
                                                                style="position:absolute; top:10px; right:14px;
                                                                border:none; background:none; font-size:24px;
                                                                cursor:pointer; color:#555;">
                                                                &times;
                                                            </button>

                                                            <h3 style="margin:0 0 6px; color:#222; font-size:18px;">
                                                                Reply to Question
                                                            </h3>

                                                            <p style="font-size:13px; color:#777; margin:0 0 18px;">
                                                                To: {{ $question->email }}
                                                            </p>

                                                            <form method="POST"
                                                                action="{{ route('new.clients.questions.reply', ['question' => $question->id]) }}">
                                                                @csrf

                                                                <div style="margin-bottom:16px;">
                                                                    <label for="reply-subject-{{ $question->id }}"
                                                                        style="display:block; font-size:13px;
                                                                        font-weight:600; color:#333; margin-bottom:7px;">
                                                                        Subject
                                                                    </label>

                                                                    <input type="text" id="reply-subject-{{ $question->id }}"
                                                                        name="subject" value="Re: Your question" required
                                                                        maxlength="255"
                                                                        style="width:100%; box-sizing:border-box;
                                                                        padding:10px 12px; border:1px solid #ddd;
                                                                        border-radius:6px; outline:none; font-size:14px;">
                                                                </div>

                                                                <div style="margin-bottom:20px;">
                                                                    <label for="reply-body-{{ $question->id }}"
                                                                        style="display:block; font-size:13px;
                                                                        font-weight:600; color:#333; margin-bottom:7px;">
                                                                        Message
                                                                    </label>

                                                                    <textarea id="reply-body-{{ $question->id }}" name="note"
                                                                        placeholder="Write your reply here..." required rows="6"
                                                                        style="width:100%; box-sizing:border-box;
                                                                        padding:10px 12px; border:1px solid #ddd;
                                                                        border-radius:6px; outline:none; font-size:14px;
                                                                        resize:vertical; font-family:inherit;"></textarea>
                                                                </div>

                                                                <div style="display:flex; justify-content:flex-end; gap:10px;">
                                                                    <button type="button"
                                                                        onclick="closeQuestionModal('reply-modal-{{ $question->id }}')"
                                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-4 rounded-md font-medium cursor-pointer">
                                                                        Cancel
                                                                    </button>

                                                                    <button type="submit"
                                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-4 rounded-md font-medium cursor-pointer bg-primary border-primary text-white">
                                                                        Send Mail
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <tr>
                                                        <td colspan="5"
                                                            class="px-5 py-8 text-center text-slate-500">
                                                            No questions have been submitted yet.
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
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
            function openQuestionModal(id) {
                document.getElementById(id).style.display = 'flex';
            }

            function closeQuestionModal(id) {
                document.getElementById(id).style.display = 'none';
            }

            function openReplyModal(questionId) {
                closeQuestionModal('question-modal-' + questionId);
                openQuestionModal('reply-modal-' + questionId);
                document.getElementById('reply-body-' + questionId).focus();
            }

            // Close a modal when clicking on the dark backdrop
            document.querySelectorAll('.question-modal').forEach(function(modal) {
                modal.addEventListener('click', function(event) {
                    if (event.target === this) {
                        this.style.display = 'none';
                    }
                });
            });
        </script>
    @endsection

</x-app-layout>
