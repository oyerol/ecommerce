@extends('admin.layouts.app')
<!-- @section('styles')

@endsection -->
@section('content')
<div class="p-4 sm:ml-64 dark:bg-black">
   
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
      <div class="grid grid-cols-4 gap-4 mb-4">
         <div class="flex flex-col items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800 p-4 space-y-2">
               <div class="text-gray-800 dark:text-white">
                  <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                     <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                  </svg>
               </div>
               <div class="font-bold text-gray-700 dark:text-gray-200">Total Clients</div>
               <div class="text-2xl font-semibold text-blue-600 dark:text-blue-400">{{$user}}</div>
         </div>
         
         <div class="flex flex-col items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800 p-4 space-y-2">
               <div class="text-gray-800 dark:text-white">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                     <path fill-rule="evenodd" d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z" clip-rule="evenodd"/>
                  </svg>
               </div>
               <div class="font-bold text-gray-700 dark:text-gray-200">Total Products</div>
               <div class="text-2xl font-semibold text-blue-600 dark:text-blue-400">{{$product}}</div>
         </div>

         <div class="flex flex-col items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800 p-4 space-y-2">
               <div class="text-gray-800 dark:text-white">
               <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
               </svg>
               </div>
               <div class="font-bold text-gray-700 dark:text-gray-200">Total Orders</div>
               <div class="text-2xl font-semibold text-blue-600 dark:text-blue-400">{{$order}}</div>
         </div>

         <div class="flex flex-col items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800 p-4 space-y-2">
               <div class="text-gray-800 dark:text-white">
               <svg class="w-[23px] h-[23px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z"/>
                  <path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z"/>
               </svg>
               </div>
               <div class="font-bold text-gray-700 dark:text-gray-200">Total Delivered</div>
               <div class="text-2xl font-semibold text-blue-600 dark:text-blue-400">{{$delivered}}</div>
         </div>

      
      </div>
   </div>
</div>
@endsection
<!-- @push('scripts')

@endpush -->
