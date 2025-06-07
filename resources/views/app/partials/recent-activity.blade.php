<!-- Recent Activity -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-200">
    <div class="p-6 border-b border-gray-200">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-800">Recent Activity</h3>
            <a href="#" class="text-sm text-peach-600 hover:text-peach-700 font-medium">View All</a>
        </div>
    </div>
    
    <div class="p-6">
        <div class="space-y-4">
            <!-- Sample Activities -->
            <div class="flex items-start space-x-3">
                <div class="w-8 h-8 bg-gradient-to-br from-blue-400 to-indigo-400 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm text-gray-800">
                        <span class="font-medium">New order</span> created for 
                        <span class="font-medium text-peach-600">Maria Santos</span>
                    </p>
                    <p class="text-xs text-gray-500 mt-1">Custom uniform - Due: June 15, 2025</p>
                </div>
                <span class="text-xs text-gray-400 flex-shrink-0">2h ago</span>
            </div>

            <div class="flex items-start space-x-3">
                <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-emerald-400 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm text-gray-800">
                        <span class="font-medium">Payment received</span> from 
                        <span class="font-medium text-peach-600">John Doe</span>
                    </p>
                    <p class="text-xs text-gray-500 mt-1">₱2,500 via GCash</p>
                </div>
                <span class="text-xs text-gray-400 flex-shrink-0">4h ago</span>
            </div>

            <div class="flex items-start space-x-3">
                <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-violet-400 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm text-gray-800">
                        <span class="font-medium">New customer</span> 
                        <span class="font-medium text-peach-600">Anna Cruz</span> added
                    </p>
                    <p class="text-xs text-gray-500 mt-1">Contact: +63 912 345 6789</p>
                </div>
                <span class="text-xs text-gray-400 flex-shrink-0">6h ago</span>
            </div>

            <div class="flex items-start space-x-3">
                <div class="w-8 h-8 bg-gradient-to-br from-orange-400 to-red-400 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h8m-8 0h8v12a2 2 0 01-2 2H10a2 2 0 01-2-2V7"></path>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm text-gray-800">
                        <span class="font-medium">Fitting session</span> scheduled for 
                        <span class="font-medium text-peach-600">Robert Kim</span>
                    </p>
                    <p class="text-xs text-gray-500 mt-1">Tomorrow at 2:00 PM</p>
                </div>
                <span class="text-xs text-gray-400 flex-shrink-0">1d ago</span>
            </div>

            <div class="flex items-start space-x-3">
                <div class="w-8 h-8 bg-gradient-to-br from-rose-400 to-pink-400 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm text-gray-800">
                        <span class="font-medium">Order completed</span> for 
                        <span class="font-medium text-peach-600">Lisa Wang</span>
                    </p>
                    <p class="text-xs text-gray-500 mt-1">Alteration - 2 skirts hemmed</p>
                </div>
                <span class="text-xs text-gray-400 flex-shrink-0">2d ago</span>
            </div>
        </div>

        <!-- Empty State (when no activities) -->
        <!-- 
        <div class="text-center py-8">
            <svg class="w-12 h-12 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
            </svg>
            <p class="text-gray-500 text-sm">No recent activity</p>
        </div>
        -->
    </div>
</div>
