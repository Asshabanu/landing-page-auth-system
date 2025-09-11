@extends('layouts.user')
@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
    <div>
        <p class="text-gray-600 mt-1">Manage and respond to customer feedback</p>
    </div>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    @php
        $reviewStats = [
            ['icon'=>'fas fa-star', 'value'=>'4.8', 'label'=>'Average Rating', 'change'=>'Based on 24 reviews', 'bg'=>'blue', 'text'=>'blue-600', 'iconBg'=>'blue-100'],
            ['icon'=>'fas fa-thumbs-up', 'value'=>18, 'label'=>'5-Star Reviews', 'change'=>'75% of all reviews', 'bg'=>'green', 'text'=>'green-600', 'iconBg'=>'green-100'],
            ['icon'=>'fas fa-comment', 'value'=>3, 'label'=>'Pending Reviews', 'change'=>'Awaiting approval', 'bg'=>'yellow', 'text'=>'yellow-600', 'iconBg'=>'yellow-100'],
            ['icon'=>'fas fa-reply', 'value'=>'92%', 'label'=>'Response Rate', 'change'=>'Excellent response time', 'bg'=>'indigo', 'text'=>'indigo-600', 'iconBg'=>'indigo-100'],
        ];
    @endphp
    @foreach($reviewStats as $stat)
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center">
            <div class="w-12 h-12 flex items-center justify-center bg-{{ $stat['iconBg'] }} rounded-lg mr-4">
                <i class="{{ $stat['icon'] }} text-{{ $stat['text'] }} text-xl"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-800">{{ $stat['value'] }}</p>
                <p class="text-gray-600 text-sm">{{ $stat['label'] }}</p>
                <p class="text-{{ $stat['text'] }} text-xs mt-1">{{ $stat['change'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Rating Distribution -->
<div class="bg-white rounded-xl shadow-md p-6 mb-8 border border-gray-100">
    <div class="mb-6">
        <h5 class="text-lg font-semibold text-gray-800">Rating Distribution</h5>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            @php
                $ratings = [
                    ['stars'=>5,'percent'=>75,'color'=>'yellow'],
                    ['stars'=>4,'percent'=>20,'color'=>'blue'],
                    ['stars'=>3,'percent'=>5,'color'=>'indigo'],
                    ['stars'=>2,'percent'=>0,'color'=>'gray'],
                ];
            @endphp
            @foreach($ratings as $rate)
            <div class="mb-4">
                <div class="flex items-center">
                    <div class="w-16 text-sm text-gray-600">{{ $rate['stars'] }} stars</div>
                    <div class="flex-1 mx-3">
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-{{ $rate['color'] }}-500 h-2.5 rounded-full" style="width: {{ $rate['percent'] }}%"></div>
                        </div>
                    </div>
                    <div class="w-12 text-sm text-gray-600 text-right">{{ $rate['percent'] }}%</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <div class="text-4xl font-bold text-yellow-500 mb-2">4.8</div>
            <div class="mb-3 flex justify-center">
                <i class="fas fa-star text-yellow-500"></i>
                <i class="fas fa-star text-yellow-500"></i>
                <i class="fas fa-star text-yellow-500"></i>
                <i class="fas fa-star text-yellow-500"></i>
                <i class="fas fa-star-half-alt text-yellow-500"></i>
            </div>
            <div class="text-gray-600 text-sm">Based on 24 reviews</div>
        </div>
    </div>
</div>

<!-- Reviews List -->
<div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
    <div class="px-6 py-4 border-b border-gray-200 flex flex-col md:flex-row justify-between items-start md:items-center">
        <h5 class="text-lg font-semibold text-gray-800 mb-2 md:mb-0">Recent Reviews</h5>
        <div class="relative">
            <button class="flex items-center px-3 py-2 text-sm text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors duration-300" onclick="toggleDropdown()">
                <i class="fas fa-ellipsis-v mr-2"></i> Options
            </button>
            <div id="dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10 border border-gray-200">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-300">Export Reviews</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-300">Filter by Rating</a>
            </div>
        </div>
    </div>
    <div class="p-6">
        @php
            $reviews = [
                ['user'=>'John Smith','property'=>'Modern Apartment','avatar'=>'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80','rating'=>5,'text'=>'Amazing place! Very clean and well-maintained. The host was very responsive and helpful. Would definitely stay here again.','time'=>'2 days ago'],
                ['user'=>'Sarah Johnson','property'=>'Family House','avatar'=>'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80','rating'=>4,'text'=>'Great location and spacious. Could use some updates in the kitchen but overall good value for money.','time'=>'1 week ago'],
                ['user'=>'Michael Brown','property'=>'Luxury Villa','avatar'=>'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80','rating'=>4.5,'text'=>'Absolutely stunning villa! Perfect for our family vacation. The pool was amazing and the view was breathtaking.','time'=>'2 weeks ago'],
                ['user'=>'Emily Davis','property'=>'Beach House','avatar'=>'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80','rating'=>5,'text'=>'Perfect beach house! Woke up to the sound of waves every morning. The house was clean and well-equipped.','time'=>'3 weeks ago'],
            ];
        @endphp
        @foreach($reviews as $review)
        <div class="review-item mb-6 pb-6 border-b border-gray-200 last:border-0 last:mb-0 last:pb-0">
            <div class="flex flex-col md:flex-row justify-between mb-3">
                <div class="flex items-center mb-3 md:mb-0">
                    <img src="{{ $review['avatar'] }}" class="rounded-full mr-4" width="48" height="48">
                    <div>
                        <div class="font-semibold text-gray-800">{{ $review['user'] }}</div>
                        <div class="text-sm text-gray-600">{{ $review['property'] }}</div>
                    </div>
                </div>
                <div class="text-yellow-500">
                    @for($i=1;$i<=5;$i++)
                        @if($review['rating'] >= $i)
                            <i class="fas fa-star"></i>
                        @elseif($review['rating'] > $i-1 && $review['rating'] < $i)
                            <i class="fas fa-star-half-alt"></i>
                        @else
                            <i class="far fa-star"></i>
                        @endif
                    @endfor
                </div>
            </div>
            <p class="text-gray-700 mb-3">{{ $review['text'] }}</p>
            <div class="text-sm text-gray-500">{{ $review['time'] }}</div>
        </div>
        @endforeach
    </div>
</div>

<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    }
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('dropdown');
        const button = event.target.closest('button');
        
        if (!button || !button.onclick) {
            dropdown.classList.add('hidden');
        }
    });
</script>
@endsection