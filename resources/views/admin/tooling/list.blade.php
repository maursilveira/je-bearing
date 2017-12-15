@extends('layouts.app')

@section('content')


    
    <div id="dim">
            <div id="confirm">
                <a class="ignoreDelete" href="#">X</a>

                    <img src="../../images/lock.png" alt="lock icon">
                    <h2>Wait!</h2>
                    <p>Are you sure you want to delete this?</p>
                    <a class="confirmDelete" href="destroy">Yes, Delete</a>    
                
            </div>
            <div id="dimClick2"></div>
    </div>

    <div id="dim2">
        <div id="dimClick"></div>
        <div id="quickView">
            <a class="xButt" href="#">X</a>

            <div id="itemImgInfo">

                <div id="itemImg">
                    <img src="../../images/placeholderImg.jpg" alt="placeholder Image">
                </div>

                <div id="itemInfo">
                    <h2 id="toolname"></h2>
                    <p id="number"></p>
                </div>

            </div>

            <p id="desc"></p>
            <a class="confirmEdit" href="#">Edit</a> 
           
        </div>
    </div>

<section id="content">
    <div class="section-head">

            <div class="section-title">
                <h2 id="bigTitle">Tooling</h2>
                <h5 id="subTitle">There are currently <span class="green">{{ $count }}</span> tools.</h5>
            </div>


            <div class="add-button">
				<a href="{{ url('/admin/tooling/add')}}"><img src="../../images/plusIcon.png" alt="add an item" width="25px;"></a>
			</div>

    </div>

    <div class="grid-view">

        <div id="quickView" style="display:none;">
        	<img src="../../images/person.jpg" width="100px">
        	<h2>Name</h2>
        	<p>Number</p>
        	<p>Desc</p>
        </div>

        <div class="list">
        <ul>
            <li id="itemListTitles"><p>Name</p><p>Tool #</p><p>Edit</p><p>Delete</p></li>
            @foreach ($tools as $tool)
                <li class="tool-item">
                <a class="item-name itemName" href="#" data-id="{{$tool->tool_id}}">{{$tool->tool_name}}</a>
                <p>{{$tool->tool_number}}</p>
                <a class="edit" href="{{action('ToolingController@edit', ['$id' => $tool->tool_id])}}">Edit</a>
                <a class="delete" data-id="{{$tool->tool_id}}" href="#">Delete</a>
                </li>

            @endforeach
        </ul>
        </div>
    </div>
</section>
@endsection
