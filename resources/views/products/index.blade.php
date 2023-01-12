<x-guest-layout>
    <a href="/products/create" class="px-4 py-2 bg-green-400 text-white rounded-md">
        New Data
    </a>
    <table class="w-full mt-2">
        <thead>
            <tr>
                <td clas="px-3 py-2 bg-slate-400 text-white">Name</td>
                <td clas="px-3 py-2 bg-slate-400 text-white">Price</td>               
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $key =>$item)
            <tr>
                <td class="px-3 py-2">{{ $item->name ?? ''}}</td>
                <td class="px-3 py-2">{{ $item->price ?? ''}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-guest-layout>