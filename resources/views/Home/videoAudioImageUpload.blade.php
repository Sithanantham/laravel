@extends('layouts.homeLayout')

@section('content')

        <div class="row items" id="myContent body">

<div class="col-md-12 stretch-card">
    <div class="card">
        <div class="" id="myTable">
        @foreach($videoAudioImageUpload as $videoAudioImageUploads)
        <div class="">
            <div class="card">
                <div class="card-body">
                        <div class="col-sm-4" style="float:left;">
                           <a href="{{URL::asset('/productImages/'.$videoAudioImageUploads->product_image)}}" target="_blank"><img src="{{URL::asset('/productImages/'.$videoAudioImageUploads->product_image)}}" alt="" height="110px" width="110px"></a>
                        </div>
                        <div class="col-sm-6" style="margin-left:32%">
                    <ul class="list-ticked">
                    <table id="">
                        <tr>
                            <td align="center" colspan="2" style="font-size:18px">{{ucfirst($videoAudioImageUploads->product_brand_name)}} {{ucfirst($videoAudioImageUploads->product_name)}}</td>
                        </tr>
                        <tr>
                            <td><li>M.R.P.</li></td>
                            <td> &nbsp; : &nbsp; {{$videoAudioImageUploads->product_price}}</td>
                        </tr>
                        <tr>
                            <td><li>Price</li></td>
                            <td> &nbsp; : &nbsp; {{$videoAudioImageUploads->product_discount_price}}</td>
                        </tr>
                        <tr>
                            <td><li>Save</li></td>
                            <td> &nbsp; : &nbsp;
                                @php $saving_amount = $videoAudioImageUploads->product_price - $videoAudioImageUploads->product_discount_price @endphp
                             {{$saving_amount}} <small>({{$videoAudioImageUploads->product_discount}} %)</small></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><li>Test Audio</li></td>
                            <td> &nbsp; &nbsp;

                            <audio controls>
                                <source src="{{URL::asset('/productAudios/'.$videoAudioImageUploads->product_audio)}}" type="audio/mp4">
                                Your browser does not support the audio element.
                            </audio>

                            </td>
                        </tr>
                    </table>
                    </ul>
                                <a href="/{{$videoAudioImageUploads->id}}/payment"><button class="btn btn-secondary btn-rounded btn-fw btn-sm">Buy Now</button></a>
                                <a href="#"><button class="btn btn-warning btn-rounded btn-fw btn-sm">Add to Cart</button></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © {{date('Y')}} <a href="/" target="_blank">Sithu</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Learn Laravel With <i class="mdi mdi-heart text-danger"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>



@endsection
