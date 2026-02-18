<dialog id="myUniv" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 50; background: transparent; border: none;">
    <div style="position: fixed; inset: 0; background: rgba(107, 114, 128, 0.5); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px);" aria-hidden="true"></div>
    <div style="position: relative; width: 90%; max-width: 50%; margin: 2.5rem auto; background: white; border-radius: 0.375rem; padding: 1.25rem;">
        <div class="flex flex-col w-full h-auto">
             <!-- Header -->
             <div class="flex w-full h-auto justify-center items-center">
               <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold text-black dark:text-white">
                     Add University
               </div>
               <div onclick="document.getElementById('myUniv').close();" class="flex w-1/12 h-auto justify-center cursor-pointer text-black dark:text-white">
                     <i class="fa fa-close"></i>
               </div>
               <!--Header End-->
             </div>
               <!-- Modal Content-->
            <div class="bg-white dark:bg-slate-900 py-6 px-10 sm:max-w-md md:max-w-lg lg:max-w-xl w-full">
                <form id="addUniversityForm" class="bg-white dark:bg-slate-900 py-6 px-10 sm:max-w-md md:max-w-lg lg:max-w-xl w-full rounded-lg">
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <input type="text" id="university_name" class="focus:outline-none dark:bg-slate-600 text-black dark:text-white border-b w-full pb-2 border-sky-400 placeholder-gray-500 dark:placeholder-white rounded-sm" placeholder="University Name"/>
                        </div>
                        <div>
                            <input type="text" id="university_acronym" class="focus:outline-none dark:bg-slate-600 border-b text-black dark:text-white w-full pb-2 border-sky-400 placeholder-gray-500 dark:placeholder-white rounded-sm" placeholder="University Acronym"/>
                        </div>
                        <div>
                            <textarea id="university_address" class="focus:outline-none border-b w-full dark:bg-slate-600 text-black dark:text-white pb-2 border-sky-400 placeholder-gray-500 dark:placeholder-white rounded-sm" rows="3" placeholder="University Address"></textarea>
                        </div>
                        <div>
                            <input type="text" id="university_acreditation" class="focus:outline-none dark:bg-slate-600 border-b text-black dark:text-white w-full pb-2 border-sky-400 placeholder-gray-500 dark:placeholder-white rounded-sm" placeholder="University Acreditation"/>
                        </div>
                        <div>
                            <input type="text" id="university_website" class="focus:outline-none dark:bg-slate-600 border-b text-black dark:text-white w-full pb-2 border-sky-400 placeholder-gray-500 dark:placeholder-white rounded-sm" placeholder="University Website"/>
                        </div>
                        <input type="hidden" id="user_id" value="{{session('userid')}}" class="focus:outline-none dark:bg-slate-600 border-b text-black dark:text-white w-full pb-2 border-sky-400 placeholder-gray-500 dark:placeholder-white rounded-md" placeholder="User ID"/>
                        <div class="flex gap-4 px-4" style="justify-content: flex-end;">
                            <button type="button" onclick="document.getElementById('myUniv').close();" class="py-2 px-4 items-center gap-x-2 text-base text-center font-medium rounded-sm border border-transparent bg-red-500 text-white hover:bg-red-600">
                                Cancel
                            </button>
                            <button type="submit" class="py-2 px-4 items-center gap-x-2 text-base text-center font-medium rounded-sm border border-transparent bg-teal-500 text-white hover:bg-teal-600">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </dialog>
