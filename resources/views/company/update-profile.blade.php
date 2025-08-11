<x-app-layout>

    @section('title')
    <h1>Company Profile Set-up</h1>
    @endsection


    <x-slot name="content">

        <div
            class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                    <div class="col-span-12 sm:col-span-10 sm:col-start-2">


                        <form action="{{route('company.profile.update')}}" enctype="multipart/form-data"
                            method="POST">

                            @csrf

                            {{-- display info section --}}
                            <div style="margin-top: 40px"
                                class="flex items-center lg:justify-center flex-1 lg:first:justify-start lg:last:justify-end group active after:hidden before:hidden after:lg:block before:lg:block first:after:content-[''] first:after:w-full first:after:bg-slate-300/60 first:after:h-[2px] first:after:ml-5 group-[.mode--light]:first:after:bg-slate-300/20 last:before:content-[''] last:before:w-full last:before:bg-slate-300/60 last:before:h-[2px] last:before:mr-5 group-[.mode--light]:last:before:bg-slate-300/20 last:after:hidden after:content-[''] after:w-full after:bg-slate-300/60 after:h-[2px] after:ml-5 group-[.mode--light]:after:bg-slate-300/20 first:before:hidden before:content-[''] before:w-full before:bg-slate-300/60 before:h-[2px] before:mr-5 group-[.mode--light]:before:bg-slate-300/20">
                                <div class="flex items-center">
                                    <div
                                        class="rounded-full border bg-white group-[.mode--light]:!border-white/[0.25] group-[.active]:bg-primary group-[.mode--light]:!bg-transparent group-[.active]:text-white group-[.mode--light]:!text-slate-200 [.group.mode--light_.group.active_&]:!border-white/[0.15] [.group.mode--light_.group.active_&]:!bg-white/[0.12]">
                                        <div class="flex h-10 w-10 items-center justify-center">
                                            C
                                        </div>
                                    </div>
                                    <div
                                        class="ml-3.5 whitespace-nowrap font-medium text-slate-500 group-[.active]:text-current group-[.mode--light]:!text-slate-300 [.group.mode--light_.group.active_&]:!text-slate-100">
                                        Company  Information
                                    </div>
                                </div>
                            </div>
                            <div class="mt-7">
                                <div class="box box--stacked flex flex-col">
                                    <div class="p-7">

                                        @if ($errors->any())
                                        <div class="p-4 mb-4 bg-red-100 rounded-lg text-red-700">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif

                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Company Logo</div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Upload a clear and recent Logo.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex items-center">
                                                    <!-- Profile Photo Preview -->
                                                    <div id="preview-container"
                                                        class="relative flex h-24 w-24 items-center justify-center rounded-full border border-primary/10 bg-primary/5">
                                                        <img id="preview" src="#" alt="Profile Preview"
                                                            class="hidden h-full w-full rounded-full object-cover" />
                                                        <i id="placeholder-icon" data-tw-merge="" data-lucide="user"
                                                            class="-mt-1.5 h-[65%] w-[65%] fill-slate-300/70 stroke-slate-400/50 stroke-[0.5]">
                                                        </i>
                                                    </div>

                                                    <!-- Hidden File Input -->
                                                    <input type="file" id="upload" name="company_logo" accept="image/*"
                                                        class="hidden" onchange="handleFileUpload(event)" />
                                                </div>
                                                <!-- File Upload Trigger -->
                                                <button type="button" class="mt-3 text-sm text-primary-600 underline"
                                                    onclick="document.getElementById('upload').click()">
                                                    Choose Image
                                                </button>
                                            </div>
                                        </div>

                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Company Name</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Enter you company name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <input data-tw-merge="" name="company_name" type="text"
                                                        placeholder="I&M Limited."
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">

                                                    </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Company Since</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        When was this company initiated.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <input data-tw-merge="" type="date" name="company_since"
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                                            </div>
                                        </div>

                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium"> Company Email</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Please provide a valid email address that you have access
                                                        to.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <input data-tw-merge="" type="email" name="company_email"
                                                    value="{{Auth::user()->email}}"
                                                    placeholder="i&mlimited@gmail.com"
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                            </div>
                                        </div>

                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Country</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Enter country where the company is based.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <select name="country" id="countries-list"
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                                                <option selected disabled>-- Select --</option>

                                                <option value="Nigeria">
                                                    Nigeria</option>
                                                <option value="Afghanistan">
                                                    Afghanistan</option>
                                                <option value="Albania">
                                                    Albania</option>
                                                <option value="Algeria">
                                                    Algeria</option>
                                                <option value="American Samoa">
                                                    American Samoa
                                                </option>
                                                <option value="Andorra">
                                                    Andorra</option>
                                                <option value="Angola">
                                                    Angola</option>
                                                <option value="Anguilla">
                                                    Anguilla</option>
                                                <option value="Antarctica">
                                                    Antarctica</option>
                                                <option value="Antigua &amp; Barbuda">
                                                    Antigua & Barbuda
                                                </option>
                                                <option value="Argentina">
                                                    Argentina</option>
                                                <option value="Armenia">
                                                    Armenia</option>
                                                <option value="Aruba">
                                                    Aruba</option>
                                                <option value="Ascension Island">
                                                    Ascension Island
                                                </option>
                                                <option value="Australia">
                                                    Australia</option>
                                                <option value="Austria">
                                                    Austria</option>
                                                <option value="Azerbaijan">
                                                    Azerbaijan</option>
                                                <option value="Bahamas">
                                                    Bahamas</option>
                                                <option value="Bahrain">
                                                    Bahrain</option>
                                                <option value="Bangladesh">
                                                    Bangladesh</option>
                                                <option value="Barbados">
                                                    Barbados</option>
                                                <option value="Belarus">
                                                    Belarus</option>
                                                <option value="Belgium">
                                                    Belgium</option>
                                                <option value="Belize">
                                                    Belize</option>
                                                <option value="Benin">
                                                    Benin</option>
                                                <option value="Bermuda">
                                                    Bermuda</option>
                                                <option value="Bhutan">
                                                    Bhutan</option>
                                                <option value="Bolivia">
                                                    Bolivia</option>
                                                <option value="Bosnia &amp; Herzegovina">
                                                    Bosnia & Herzegovina
                                                </option>
                                                <option value="Botswana">
                                                    Botswana</option>
                                                <option value="Bouvet Island">
                                                    Bouvet Island
                                                </option>
                                                <option value="Brazil">
                                                    Brazil</option>
                                                <option value="British Indian Ocean Territory">
                                                    British Indian Ocean
                                                    Territory</option>
                                                <option value="British Virgin Islands">
                                                    British Virgin
                                                    Islands</option>
                                                <option value="Brunei">
                                                    Brunei</option>
                                                <option value="Bulgaria">
                                                    Bulgaria</option>
                                                <option value="Burkina Faso">
                                                    Burkina Faso
                                                </option>
                                                <option value="Burundi">
                                                    Burundi</option>
                                                <option value="Cambodia">
                                                    Cambodia</option>
                                                <option value="Cameroon">
                                                    Cameroon</option>
                                                <option value="Canada">
                                                    Canada</option>
                                                <option value="Canary Islands">
                                                    Canary Islands
                                                </option>
                                                <option value="Cape Verde">
                                                    Cape Verde</option>
                                                <option value="Caribbean Netherlands">
                                                    Caribbean
                                                    Netherlands</option>
                                                <option value="Cayman Islands">
                                                    Cayman Islands
                                                </option>
                                                <option value="Central African Republic">
                                                    Central African
                                                    Republic</option>
                                                <option value="Ceuta &amp; Melilla">
                                                    Ceuta & Melilla
                                                </option>
                                                <option value="Chad">
                                                    Chad</option>
                                                <option value="Chile">
                                                    Chile</option>
                                                <option value="China">
                                                    China</option>
                                                <option value="Christmas Island">
                                                    Christmas Island
                                                </option>
                                                <option value="Clipperton Island">
                                                    Clipperton Island
                                                </option>
                                                <option value="Cocos (Keeling) Islands">
                                                    Cocos (Keeling)
                                                    Islands</option>
                                                <option value="Colombia">
                                                    Colombia</option>
                                                <option value="Comoros">
                                                    Comoros</option>
                                                <option value="Congo - Brazzaville">
                                                    Congo - Brazzaville
                                                </option>
                                                <option value="Congo - Kinshasa">
                                                    Congo - Kinshasa
                                                </option>
                                                <option value="Cook Islands">
                                                    Cook Islands
                                                </option>
                                                <option value="Costa Rica">
                                                    Costa Rica</option>
                                                <option value="Croatia">
                                                    Croatia</option>
                                                <option value="Cuba">
                                                    Cuba</option>
                                                <option value="Curaçao">
                                                    Curaçao</option>
                                                <option value="Cyprus">
                                                    Cyprus</option>
                                                <option value="Czechia">
                                                    Czechia</option>
                                                <option value="Côte d’Ivoire">
                                                    Côte d’Ivoire
                                                </option>
                                                <option value="Denmark">
                                                    Denmark</option>
                                                <option value="Diego Garcia">
                                                    Diego Garcia
                                                </option>
                                                <option value="Djibouti">
                                                    Djibouti</option>
                                                <option value="Dominica">
                                                    Dominica</option>
                                                <option value="Dominican Republic">
                                                    Dominican Republic
                                                </option>
                                                <option value="Ecuador">
                                                    Ecuador</option>
                                                <option value="Egypt">
                                                    Egypt</option>
                                                <option value="El Salvador">
                                                    El Salvador</option>
                                                <option value="Equatorial Guinea">
                                                    Equatorial Guinea
                                                </option>
                                                <option value="Eritrea">
                                                    Eritrea</option>
                                                <option value="Estonia">
                                                    Estonia</option>
                                                <option value="Eswatini">
                                                    Eswatini</option>
                                                <option value="Ethiopia">
                                                    Ethiopia</option>
                                                <option value="Falkland Islands">
                                                    Falkland Islands
                                                </option>
                                                <option value="Faroe Islands">
                                                    Faroe Islands
                                                </option>
                                                <option value="Fiji">
                                                    Fiji</option>
                                                <option value="Finland">
                                                    Finland</option>
                                                <option value="France">
                                                    France</option>
                                                <option value="French Guiana">
                                                    French Guiana
                                                </option>
                                                <option value="French Polynesia">
                                                    French Polynesia
                                                </option>
                                                <option value="French Southern Territories">
                                                    French Southern
                                                    Territories</option>
                                                <option value="Gabon">
                                                    Gabon</option>
                                                <option value="Gambia">
                                                    Gambia</option>
                                                <option value="Georgia">
                                                    Georgia</option>
                                                <option value="Germany">
                                                    Germany</option>
                                                <option value="Ghana">
                                                    Ghana</option>
                                                <option value="Gibraltar">
                                                    Gibraltar</option>
                                                <option value="Greece">
                                                    Greece</option>
                                                <option value="Greenland">
                                                    Greenland</option>
                                                <option value="Grenada">
                                                    Grenada</option>
                                                <option value="Guadeloupe">
                                                    Guadeloupe</option>
                                                <option value="Guam">
                                                    Guam</option>
                                                <option value="Guatemala">
                                                    Guatemala</option>
                                                <option value="Guernsey">
                                                    Guernsey</option>
                                                <option value="Guinea">
                                                    Guinea</option>
                                                <option value="Guinea-Bissau">
                                                    Guinea-Bissau
                                                </option>
                                                <option value="Guyana">
                                                    Guyana</option>
                                                <option value="Haiti">
                                                    Haiti</option>
                                                <option value="Heard &amp; McDonald Islands">
                                                    Heard & McDonald
                                                    Islands</option>
                                                <option value="Honduras">
                                                    Honduras</option>
                                                <option value="Hong Kong SAR China">
                                                    Hong Kong SAR China
                                                </option>
                                                <option value="Hungary">
                                                    Hungary</option>
                                                <option value="Iceland">
                                                    Iceland</option>
                                                <option value="India">
                                                    India</option>
                                                <option value="Indonesia">
                                                    Indonesia</option>
                                                <option value="Iran">
                                                    Iran</option>
                                                <option value="Iraq">
                                                    Iraq</option>
                                                <option value="Ireland">
                                                    Ireland</option>
                                                <option value="Isle of Man">
                                                    Isle of Man</option>
                                                <option value="Israel">
                                                    Israel</option>
                                                <option value="Italy">
                                                    Italy</option>
                                                <option value="Jamaica">
                                                    Jamaica</option>
                                                <option value="Japan">
                                                    Japan</option>
                                                <option value="Jersey">
                                                    Jersey</option>
                                                <option value="Jordan">
                                                    Jordan</option>
                                                <option value="Kazakhstan">
                                                    Kazakhstan</option>
                                                <option value="Kenya">
                                                    Kenya</option>
                                                <option value="Kiribati">
                                                    Kiribati</option>
                                                <option value="Kosovo">
                                                    Kosovo</option>
                                                <option value="Kuwait">
                                                    Kuwait</option>
                                                <option value="Kyrgyzstan">
                                                    Kyrgyzstan</option>
                                                <option value="Laos">
                                                    Laos</option>
                                                <option value="Latvia">
                                                    Latvia</option>
                                                <option value="Lebanon">
                                                    Lebanon</option>
                                                <option value="Lesotho">
                                                    Lesotho</option>
                                                <option value="Liberia">
                                                    Liberia</option>
                                                <option value="Libya">
                                                    Libya</option>
                                                <option value="Liechtenstein">
                                                    Liechtenstein
                                                </option>
                                                <option value="Lithuania">
                                                    Lithuania</option>
                                                <option value="Luxembourg">
                                                    Luxembourg</option>
                                                <option value="Macao SAR China">
                                                    Macao SAR China
                                                </option>
                                                <option value="Madagascar">
                                                    Madagascar</option>
                                                <option value="Malawi">
                                                    Malawi</option>
                                                <option value="Malaysia">
                                                    Malaysia</option>
                                                <option value="Maldives">
                                                    Maldives</option>
                                                <option value="Mali">
                                                    Mali</option>
                                                <option value="Malta">
                                                    Malta</option>
                                                <option value="Marshall Islands">
                                                    Marshall Islands
                                                </option>
                                                <option value="Martinique">
                                                    Martinique</option>
                                                <option value="Mauritania">
                                                    Mauritania</option>
                                                <option value="Mauritius">
                                                    Mauritius</option>
                                                <option value="Mayotte">
                                                    Mayotte</option>
                                                <option value="Mexico">
                                                    Mexico</option>
                                                <option value="Micronesia">
                                                    Micronesia</option>
                                                <option value="Moldova">
                                                    Moldova</option>
                                                <option value="Monaco">
                                                    Monaco</option>
                                                <option value="Mongolia">
                                                    Mongolia</option>
                                                <option value="Montenegro">
                                                    Montenegro</option>
                                                <option value="Montserrat">
                                                    Montserrat</option>
                                                <option value="Morocco">
                                                    Morocco</option>
                                                <option value="Mozambique">
                                                    Mozambique</option>
                                                <option value="Myanmar (Burma)">
                                                    Myanmar (Burma)
                                                </option>
                                                <option value="Namibia">
                                                    Namibia</option>
                                                <option value="Nauru">
                                                    Nauru</option>
                                                <option value="Nepal">
                                                    Nepal</option>
                                                <option value="Netherlands">
                                                    Netherlands</option>
                                                <option value="Netherlands Antilles">
                                                    Netherlands Antilles
                                                </option>
                                                <option value="New Caledonia">
                                                    New Caledonia
                                                </option>
                                                <option value="New Zealand">
                                                    New Zealand</option>
                                                <option value="Nicaragua">
                                                    Nicaragua</option>
                                                <option value="Niger">
                                                    Niger</option>
                                                <option value="Nigeria">
                                                    Nigeria</option>
                                                <option value="Niue">
                                                    Niue</option>
                                                <option value="Norfolk Island">
                                                    Norfolk Island
                                                </option>
                                                <option value="Northern Mariana Islands">
                                                    Northern Mariana
                                                    Islands</option>
                                                <option value="North Korea">
                                                    North Korea</option>
                                                <option value="North Macedonia">
                                                    North Macedonia
                                                </option>
                                                <option value="Norway">
                                                    Norway</option>
                                                <option value="Oman">
                                                    Oman</option>
                                                <option value="Outlying Oceania">
                                                    Outlying Oceania
                                                </option>
                                                <option value="Pakistan">
                                                    Pakistan</option>
                                                <option value="Palau">
                                                    Palau</option>
                                                <option value="Palestinian Territories">
                                                    Palestinian
                                                    Territories</option>
                                                <option value="Panama">
                                                    Panama</option>
                                                <option value="Papua New Guinea">
                                                    Papua New Guinea
                                                </option>
                                                <option value="Paraguay">
                                                    Paraguay</option>
                                                <option value="Peru">
                                                    Peru</option>
                                                <option value="Philippines">
                                                    Philippines</option>
                                                <option value="Pitcairn Islands">
                                                    Pitcairn Islands
                                                </option>
                                                <option value="Poland">
                                                    Poland</option>
                                                <option value="Portugal">
                                                    Portugal</option>
                                                <option value="Puerto Rico">
                                                    Puerto Rico</option>
                                                <option value="Qatar">
                                                    Qatar</option>
                                                <option value="Romania">
                                                    Romania</option>
                                                <option value="Russia">
                                                    Russia</option>
                                                <option value="Rwanda">
                                                    Rwanda</option>
                                                <option value="Réunion">
                                                    Réunion</option>
                                                <option value="Samoa">
                                                    Samoa</option>
                                                <option value="San Marino">
                                                    San Marino</option>
                                                <option value="Sark">
                                                    Sark</option>
                                                <option value="Saudi Arabia">
                                                    Saudi Arabia
                                                </option>
                                                <option value="Senegal">
                                                    Senegal</option>
                                                <option value="Serbia">
                                                    Serbia</option>
                                                <option value="Seychelles">
                                                    Seychelles</option>
                                                <option value="Sierra Leone">
                                                    Sierra Leone
                                                </option>
                                                <option value="Singapore">
                                                    Singapore</option>
                                                <option value="Sint Maarten">
                                                    Sint Maarten
                                                </option>
                                                <option value="Slovakia">
                                                    Slovakia</option>
                                                <option value="Slovenia">
                                                    Slovenia</option>
                                                <option value="Solomon Islands">
                                                    Solomon Islands
                                                </option>
                                                <option value="Somalia">
                                                    Somalia</option>
                                                <option value="South Africa">
                                                    South Africa
                                                </option>
                                                <option value="South Georgia &amp; South Sandwich Islands">
                                                    South Georgia &
                                                    South Sandwich
                                                    Islands</option>
                                                <option value="South Korea">
                                                    South Korea</option>
                                                <option value="South Sudan">
                                                    South Sudan</option>
                                                <option value="Spain">
                                                    Spain</option>
                                                <option value="Sri Lanka">
                                                    Sri Lanka</option>
                                                <option value="St. Barthélemy">
                                                    St. Barthélemy
                                                </option>
                                                <option value="St. Helena">
                                                    St. Helena</option>
                                                <option value="St. Kitts &amp; Nevis">
                                                    St. Kitts & Nevis
                                                </option>
                                                <option value="St. Lucia">
                                                    St. Lucia</option>
                                                <option value="St. Martin">
                                                    St. Martin</option>
                                                <option value="St. Pierre &amp; Miquelon">
                                                    St. Pierre &
                                                    Miquelon</option>
                                                <option value="St. Vincent &amp; Grenadines">
                                                    St. Vincent &
                                                    Grenadines</option>
                                                <option value="Sudan">
                                                    Sudan</option>
                                                <option value="Suriname">
                                                    Suriname</option>
                                                <option value="Svalbard &amp; Jan Mayen">
                                                    Svalbard & Jan Mayen
                                                </option>
                                                <option value="Sweden">
                                                    Sweden</option>
                                                <option value="Switzerland">
                                                    Switzerland</option>
                                                <option value="Syria">
                                                    Syria</option>
                                                <option value="São Tomé &amp; Príncipe">
                                                    São Tomé & Príncipe
                                                </option>
                                                <option value="Taiwan">
                                                    Taiwan</option>
                                                <option value="Tajikistan">
                                                    Tajikistan</option>
                                                <option value="Tanzania">
                                                    Tanzania</option>
                                                <option value="Thailand">
                                                    Thailand</option>
                                                <option value="Timor-Leste">
                                                    Timor-Leste</option>
                                                <option value="Togo">
                                                    Togo</option>
                                                <option value="Tokelau">
                                                    Tokelau</option>
                                                <option value="Tonga">
                                                    Tonga</option>
                                                <option value="Trinidad &amp; Tobago">
                                                    Trinidad & Tobago
                                                </option>
                                                <option value="Tristan da Cunha">
                                                    Tristan da Cunha
                                                </option>
                                                <option value="Tunisia">
                                                    Tunisia</option>
                                                <option value="Turkmenistan">
                                                    Turkmenistan
                                                </option>
                                                <option value="Turks &amp; Caicos Islands">
                                                    Turks & Caicos
                                                    Islands</option>
                                                <option value="Tuvalu">
                                                    Tuvalu</option>
                                                <option value="Türkiye">
                                                    Türkiye</option>
                                                <option value="U.S. Outlying Islands">
                                                    U.S. Outlying
                                                    Islands</option>
                                                <option value="U.S. Virgin Islands">
                                                    U.S. Virgin Islands
                                                </option>
                                                <option value="Uganda">
                                                    Uganda</option>
                                                <option value="Ukraine">
                                                    Ukraine</option>
                                                <option value="United Arab Emirates">
                                                    United Arab Emirates
                                                </option>
                                                <option value="United Kingdom">
                                                    United Kingdom
                                                </option>
                                                <option value="United States">
                                                    United States
                                                </option>
                                                <option value="Uruguay">
                                                    Uruguay</option>
                                                <option value="Uzbekistan">
                                                    Uzbekistan</option>
                                                <option value="Vanuatu">
                                                    Vanuatu</option>
                                                <option value="Vatican City">
                                                    Vatican City
                                                </option>
                                                <option value="Venezuela">
                                                    Venezuela</option>
                                                <option value="Vietnam">
                                                    Vietnam</option>
                                                <option value="Wallis &amp; Futuna">
                                                    Wallis & Futuna
                                                </option>
                                                <option value="Western Sahara">
                                                    Western Sahara
                                                </option>
                                                <option value="Yemen">
                                                    Yemen</option>
                                                <option value="Zambia">
                                                    Zambia</option>
                                                <option value="Zimbabwe">
                                                    Zimbabwe</option>
                                                <option value="Åland Islands">
                                                    Åland Islands
                                                </option>
                                            </select>
                                            </div>
                                        </div>



                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Company Address</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Enter your Company location.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <input data-tw-merge="" id="autocompleteN" type="text" name="company_address"
                                                    placeholder="Enter address"
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">

                                            </div>
                                        </div>

                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Company contact number </div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Please provide a valid phone number where we can reach you
                                                        if needed.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <input data-tw-merge="" type="text" name="company_phone"
                                                        placeholder="+1 (234) 567-8901"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                                </div>

                                            </div>
                                        </div>

                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Company Size</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        How large is this company.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <input data-tw-merge="" type="number" name="company_size"
                                                        placeholder="50 staffs"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">

                                                </div>

                                            </div>
                                        </div>

                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Company Description</div>
                                                        <div
                                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                                            Required
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Please provide a detailed info about Your company.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">

                                                    <textarea data-tw-merge="" id="editor"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                                        name="company_description" id="" cols="30" rows="10"></textarea>

                                                </div>

                                            </div>
                                        </div>
                                        <div
                                            class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div
                                                class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Company Sector</div>
                                                    </div>
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        What sector best describes your company.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <select data-tw-merge="" name="department"
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1">
                                                    <option selected disabled>
                                                        -- Select --
                                                    </option>
                                                    @foreach ($depts as $d)

                                                    <option value="{{$d?->name}}">
                                                        {{$d?->name}}
                                                    </option>

                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="flex border-t border-slate-200/80 px-7 py-5 md:justify-end">
                                        <button data-tw-merge="" type="submit"
                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-10 md:w-auto"><i
                                                data-tw-merge="" data-lucide="pocket"
                                                class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"></i>
                                            Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>
