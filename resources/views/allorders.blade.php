@extends('layouts.index')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-7 col-md-offset-2"  >
       
        <table  style=" margin-bottom: 26px; color: #29352a">
        	<thead>
        		<tr>
        			  <th class="fixed">اسم صاحب العرض</th>
                      <th class="fixed">سعر الكيلو</th>
                      <th class="fixed">الوزن</th>
                      <th class="fixed">العدد</th>
                     
        		</tr>
        	</thead>
        	<tbody>
        	@foreach( $orders  as $order)
        		<tr>

        		    <td>{{$order->user->name}}</td>
        		    <td>{{$order->price}}</td>
        		    <td>{{$order->wight}}</td>
        		    <td>{{$order->number}}</td>
        		  
        		</tr>
        		@endforeach
        	</tbody>
        </table>
          
        </div>
    </div>
</div>
 <form action="#" method="post">
                   
                    {{ csrf_field() }}
                    @foreach($products as $product)
                      <input type="hidden" name="id" value="{{$product->id}}">
                    @endforeach
</form>                   
@endsection
