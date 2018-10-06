@extends('layouts.admin')

@section('content')

    <div class="container">


    <table class="table">
        <thead>
        <tr>
            <th>Place</th>
            <th>Category</th>
            <th>Score</th>

        </tr>
        </thead>
        <tbody>
        @foreach($places as $place)
            <tr>

                <td>{{$place->place->name}}</td>
                <td>


                    <table class="table">
                        <tbody>

                @foreach($place->getCategoryName($place->place) as $categoryName)

                       <tr>
                         <td>{{$categoryName}}</td>
                           <td>{{$ratings->getPlaceSum($test->getCategoryIdbyName($categoryName), $place->place->id)}}</td>
                           <td><a href="{{route('rating.show', $test->getCategoryIdbyName($categoryName))}}/"><button class="btn btn-primary" >Add Score</button></a></td>



                       </tr>


                    @endforeach
                        </tbody>
                    </table>

                </td>
                {{--<td>--}}

                {{--</td>--}}




</tr>

        @endforeach







        </tbody>
    </table>
    </div>


@endsection
