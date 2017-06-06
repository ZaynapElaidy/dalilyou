@extends('layouts.index')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2"  style="background-color: #aadd55;">
       
        <table  style=" margin-bottom: 26px; color: #29352a">
        	<thead>
        		<tr>
        			  <th class="fluid">العروض</th>
                      <th class="fixed">سعر الكيلو</th>
                      <th class="fixed">الوزن</th>
                      <th class="fixed">العدد</th>
                      <th class="fixed">النوع</th>
        		</tr>
        	</thead>
        	<tbody>
        	@foreach($products as $product)
        		<tr>

        		    <td><a href="/allorders"><button type="button" class="orders" >العروض</button></a></td>
        		    <td>{{$product->price}}</td>
        		    <td>{{$product->wight}}</td>
        		    <td>{{$product->number}}</td>
        		    <td>{{$product->type}}</td>
        		</tr>
        		@endforeach
        	</tbody>
        </table>
          
        </div>
    </div>
</div>
@endsection
