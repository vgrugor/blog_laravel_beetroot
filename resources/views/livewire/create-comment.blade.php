<div>
    <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
        <div class="space-y-8 divide-y divide-gray-200 w-1/1 mt-10">

            @if($saveSuccess)
                <div class="rounded-md bg-green-100 rounded-lg p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-12">
                            <h3 class="text-sm font-medium text-green-800">Successfully Added Comment</h3>
                            <div class="mt-2 text-sm text-green-700">
                                <p>Your comment has been added.</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="sm:col-span-6 pt-5">
                <label for="text" class="block text-sm font-medium text-gray-700">Comment</label>
                <div class="mt-1">
                    @error('comment.content') <span class="error">{{ $message }}</span> @enderror
                    <textarea id="text" rows="3" wire:model="comment.content" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Add the comment for post.</p>
            </div>
            <div wire:click="saveComment" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 cursor-pointer">Add Comment</div>
        </div>
    </div>
</div>
