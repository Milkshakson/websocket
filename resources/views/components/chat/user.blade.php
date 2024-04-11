@props(['user'])
<li class="text-slate-300 flex space-x-2 px-4 py-1 w-full hover:bg-slate-800 rounded-lg cursor-default">
    <div>{{ $user->id == 1 ? '🟢' : '🔴' }}</div>
    <span>{{ $user->username }}</span>
</li>
