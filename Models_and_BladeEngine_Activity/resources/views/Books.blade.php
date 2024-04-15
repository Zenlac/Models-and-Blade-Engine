@include('partials.header')

<h1>Books</h1>
<table border='1'>
    <tr>
       <td>ID</td>
       <td>ISBN</td>
       <td>TITLE</td>
       <td>AUTHOR</td>
       <td>DESCRIPTION</td>
       <td>DATE PUBLISHED</td>
    </tr>
    @foreach ($books as $bks)
    <tr>
        <td>{{$bks['id']}}</td>
        <td>{{$bks['isbn']}}</td>
        <td>{{$bks['title']}}</td>
        <td>{{$bks['author']}}</td>
        <td>{{$bks['description']}}</td>
        <td>{{$bks['date_published']}}</td>
    </tr>
    @endforeach
</table>

@include('partials.footer')