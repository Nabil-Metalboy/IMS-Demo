@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <h2> Search </h2>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="  search-query form-control" placeholder="Search" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                </div>
            </div>
        </div>



    </div>
    <div class="section">
        <div class="container">

            {{--<table class="table table-responsive">

                <thead >
                @foreach($allProduct as $letter => $productCollection)
                    <th class="letter-group">
                        <h3 class="title is-1 letter">{{$letter}}</h3>
                    </th>



                </thead>

               <tbody>
                @foreach($productCollection as $products)

                <tr>

                        <td class="title is-5">
                          <li>
                              <a href="/selectProduct/{{$products->p_name}}">{{$products->p_name}}</a>
                          </li>
                        </td>


                </tr>
                @endforeach
                </tbody>
                @endforeach
            </table>--}}


            <ul class="has-columns">
                @foreach($allProduct as $letter => $prductCollection)

                    <div class="col-md-1">
                        <h3 class="title is-1 letter">{{$letter}}</h3>

                        <ul>
                            @foreach($prductCollection as $products)
                                <li class="title is-5">
                                    <a href="/selectedProduct/{{$products-> id}}">{{$products-> p_name}}</a>
                                </li>
                                @endforeach
                        </ul>
                    </div>
                    @endforeach
            </ul>
        </div>
    </div>




@endsection