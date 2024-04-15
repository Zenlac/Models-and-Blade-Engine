@include('partials.header')

<h1 class="font-bold text-white">Books</h1>
<table class="shadow-2x1 font-[Poppins] border-2 border-cyan-200 w-6/12">
        <tr class="text-white">
            <td class="py-3 bg-cyan-800">ID</td>
            <td class="py-3 bg-cyan-800">ISBN</td>
            <td class="py-3 bg-cyan-800">TITLE</td>
            <td class="py-3 bg-cyan-800">AUTHOR</td>
            <td class="py-3 bg-cyan-800">DESCRIPTION</td>
            <td class="py-3 bg-cyan-800">DATE PUBLISHED</td>
        </tr>
    @foreach ($books as $bks)
        <tr class="bg-cyan-200 cursor-pointer duration-300">
            <td class="py-3 px-6">{{$bks['id']}}</td>
            <td class="py-3 px-6">{{$bks['isbn']}}</td>
            <td class="py-3 px-6">{{$bks['title']}}</td>
            <td class="py-3 px-6">{{$bks['author']}}</td>
            <td class="py-3 px-6">{{$bks['description']}}</td>
            <td class="py-3 px-6">{{$bks['date_published']}}</td>
        </tr>
        @endforeach
        
        
</table>

@include('partials.footer')