@if (session('success'))
    <div class="alert success" style="padding: 20px;
    background-color: #04AA6D;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;">
        <span class="closebtn" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'"
            onclick="this.parentElement.style.display='none';" style="margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;">&times;</span>
        <strong> {{ session('success')}}</strong>
    </div>
@elseif(session('error'))
    <div class="alert" style="padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;">
        <span class="closebtn" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'"
            onclick="this.parentElement.style.display='none';" style="margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;">&times;</span>
        <strong> {{ session('error') }}!</strong>
    </div>
@endif
