@extends('layouts.index')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2"  style="background-color: #aadd55;">
       
        <table  style=" margin-bottom: 26px; color: #29352a">
        	<thead>
        		<tr>
        			  <th class="fluid">اطلب</th>
                      <th class="fixed">سعر الكيلو</th>
                      <th class="fixed">الوزن</th>
                      <th class="fixed">العدد</th>
                      <th class="fixed">النوع</th>
        		</tr>
        	</thead>
        	<tbody>
        	@foreach($products as $product)
        		<tr>

        		    <td>
                    <form method="post" action="#">
                     {{ csrf_field()}}

                        <button  style=" font-size: 15px; font-weight: bold;" type="button" class="order" data-toggle="modal" data-target="#btn2">
                            طلب المنتج
                        </button>
           
                    </form>
           
                       
                     </td>
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

  <div id="btn2" class="modal fade modal-example" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title"  style="float: right;">طلب منتج</h4>
                </div>
                <form action="/userOrders" method="post">
                    <div class="modal-body">
                    {{ csrf_field() }}
                    @foreach($products as $product)
                      <input type="hidden" name="id" value="{{$product->id}}">
                    @endforeach 
                        <div class="form-group">
                            <label for="num"  style="float: right;">العدد</label>
                            <input type="text" class="form-control num2" name="num2"/>
                        </div>
                        <div class="form-group">
                            <label for="wight"  style="float: right;">الوزن</label>
                            <input type="text" class="form-control wight2" name="wight2"/>
                        </div>
                        <div class="form-group">
                            <label for="price"  style="float: right;">السعر للكيلو</label>
                            <input type="text" class="form-control price2" name="price2"/><br><br>
                        </div>
                    </div>
                    <div class="modal-footer">
                       <button type="submit" class="btn btn-default orderm"  style="float: right;">اطلب</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

 
