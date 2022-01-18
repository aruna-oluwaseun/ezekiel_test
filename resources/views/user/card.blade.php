<div class="p-3 mb-3 shadow bg-white rounded-sm border-gray-200">
    <h3 class="font-bold mb-3">{{ $user->name }}</h3>
    <h4 class="float-left mr-4 mb-3"><i class="fa-solid fa-location-dot text-green-600 mr-3"></i> {{ $user->description}}</h4>
    
    <p class="clear-both mb-3">{{ $user->rate}}</p>
    <a href="#" class="bg-gray-400 text-white rounded-sm px-3">More Details</a>
    <a href="#" class="bg-green-600 text-white rounded-sm px-3">Apply</a>
</div>