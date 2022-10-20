@if (session()->has('success'))

<div  
        x-data="{open:true}"
        x-init="setTimeout(()=>{open=false},3000)"
        x-show="open"
        x-transition:enter="transition duration-500  transform ease-out"
        x-transition:start = "opacity-1"
        x-transition:leave = "transition duration-500 transform ease-in"
        x-transition:leave-end="opacity-0"
        class="flex items-center p-2 mb-4 text-green bg-green-600 rounded">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 pt-1 mr-3 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
          </svg>
          


<span>
  {{session('success')}}
</span>
</div>    
@endif

@if (session()->has('error'))

<div  
        x-data="{open:true}"
        x-init="setTimeout(()=>{open=false},3000)"
        x-show="open"
        x-transition:enter="transition duration-500  transform ease-out"
        x-transition:start = "opacity-1"
        x-transition:leave = "transition duration-500 transform ease-in"
        x-transition:leave-end="opacity-0"
        class="flex items-center p-2 mb-4 text-green bg-green-600 rounded">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 pt-1 mr-3 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
        </svg>
        
           


<span>
  {{session('error')}}
</span>
</div>    
@endif