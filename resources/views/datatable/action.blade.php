@if($module != "user" && Auth::user()->role == 3)
<div class="icon pull-left">
    <a href="{{url('/'.$module.'/edit/'.$id)}}">
        <i class="fa fa-edit fa-lg" style="font-size: 20px;"></i>
    </a>
</div>

<div class="icon pull-left">
    <a href="javascript:void(0);" class="deleteRecord" formaction="{{$module}}" rel="{{$id}}">
        <i class="fa fa-trash fa-lg" style="font-size: 20px; margin-left: 5px;"></i>
    </a>
</div>
@elseif(Auth::user()->role == 1 || Auth::user()->role == 2)
<div class="icon pull-left">
    <a href="{{url('/'.$module.'/edit/'.$id)}}">
        <i class="fa fa-edit fa-lg" style="font-size: 20px;"></i>
    </a>
</div>

<div class="icon pull-left">
    <a href="javascript:void(0);" class="deleteRecord" formaction="{{$module}}" rel="{{$id}}">
        <i class="fa fa-trash fa-lg" style="font-size: 20px; margin-left: 5px;"></i>
    </a>
</div>
@endif
