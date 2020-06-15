<div class="card-deck">
    @foreach($rooms as $room)
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="card  text-black bg-light mt-5"
            style="width:100%;height:550px;margin-top:20px;margin-bottom:20px;">
            <div class="card-header">
                <img class="card-img-top" src="{{'/storage/'. $room->image}}" alt="Card image"
                    style="width:100%;height:250px;">
                    </div>
            <div class="card-body">
                <h4 class="card-title" style="text-align:center;">{{$room->name}}</h4> <br>
                <p class="card-text" style="color:black;">Loại phòng:&emsp;<span style="float:right;"> {{$room->typeroom}}</b></span>
                <p class="card-text" style="color:black;">Diện tích:&emsp; <span style="float:right;">{{$room->getArea()}}</span></p>
                <p class="card-text" style="color:black;">Giá phòng:&emsp;<span style="float:right;">  <b>{{$room->getPrice()}}</b></span></p>
            </div>
            <div class="card-footer">
            <p class="card-text" style="color:black;">Xem:&emsp;<span style="float:right;color:#FF6633;"> <b> Đặt phòng</b></span></p>     
            </div>
        </div>
    </div>
    @endforeach
</div>