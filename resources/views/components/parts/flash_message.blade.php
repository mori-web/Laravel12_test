<div id="flash_message">
    @if(Session::has('flash_alert'))
        <div @click="hide=true" :class="{'hidden':hide}" class="fixed top-10 left-1/2 transform -translate-x-1/2 w-full max-w-lg z-50 bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded shadow-lg flex items-center justify-center text-center opacity-90 cursor-pointer transition-all">
            <span class="font-bold text-lg flex-1">{{ Session::get('flash_alert') }}</span>
            <button type="button" class="ml-4 text-red-700 hover:text-red-900 focus:outline-none" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    @endif

    @if (session('status'))
        <div @click="hide=true" :class="{'hidden':hide}" class="fixed top-10 left-1/2 transform -translate-x-1/2 w-full max-w-lg z-50 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded shadow-lg flex items-center justify-center text-center opacity-90 cursor-pointer transition-all">
            <span class="font-bold text-lg flex-1">{{ session('status') }}</span>
            <button type="button" class="ml-4 text-green-700 hover:text-green-900 focus:outline-none" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    @endif
</div>

@section('flash_message_script')
<script>
    Vue.createApp({
        data() {
            return {
                hide: false
            }
        }
    }).mount('#flash_message');
</script>
@endsection
