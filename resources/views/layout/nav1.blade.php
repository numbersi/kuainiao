<div class="blog-masthead navbar-fixed-top">
    <div class="container">
        <form action="/posts/search" method="GET">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <a class="blog-nav-item " href="/posts">首页</a>
            </li>
            <li>
                <a class="blog-nav-item" href="/posts/create">写文章</a>
            </li>
            <li>
                <a class="blog-nav-item" href="/notices">通知</a>
            </li>
{{--            <li>
                <input name="query" type="text" value="@if(!empty($query)){{$query}}@endif" class="form-control" style="margin-top:10px" placeholder="搜索词">
            </li>
            <li>
                <button class="btn btn-default" style="margin-top:10px" type="submit">Go!</button>
            </li>、--}}
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <div>
                    @if($user)
                    <img src="{{$user->avatar}}" alt="" class="img-rounded" style="border-radius:500px; height: 30px">
                    <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$user->name}}  <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/me">我的主页</a></li>
{{--
                        <li><a href="/user/{{$user->id}}/setting">个人设置</a></li>
--}}
                        <li><a href="/logout">登出</a></li>
                    </ul>
                        <ul class="nav navbar-nav navbar-right">

                            @else
                            <li>
                                <a class="blog-nav-item " href="/login">登陆</a>
                            </li>
                            <li>
                                <a class="blog-nav-item " href="/register">注册</a>
                            </li>
                    @endif
                            <li>
                                <a class="blog-nav-item " href="/spread">获取积分</a>
                            </li>
                        </ul>

                </div>
            </li>
        </ul>
        </form>
    </div>
</div>