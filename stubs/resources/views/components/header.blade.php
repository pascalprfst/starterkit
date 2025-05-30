<div class="py-1.5 px-8 border-b border-gray-200 flex items-center justify-between">
    <h1 class="font-semibold text-gray-800 text-2xl">Titel hier</h1>
    <div class="flex items-center">
        <div class="px-4">
            <x-icons.bell class="w-5 text-gray-500 cursor-pointer"/>
        </div>
        <div class="px-4 border-l border-gray-200 flex items-center gap-x-4">
            <div class="h-8 w-8 bg-red-500 rounded-full">

            </div>
            <div class="text-sm">
                <div class="font-medium">
                    {{auth()->user()->name}} Purfürst
                </div>
                <div class="text-gray-500 relative -top-0.5">
                    Admin
                </div>
            </div>
        </div>
    </div>
</div>
