<!DOCTYPE html>
<html>
@include('admin.commun.header')
<body id="index" class="home page">
<div class="wrapper">
    @include('admin.commun.menu')
    <div class="content-wrapper">
        @include("admin.commun.alert")
        <section class="content">
            @yield("content")
        </section>
    </div>
    @include("admin.commun.footer")
    <div class="control-sidebar-bg"></div>
</div>
@include("admin.commun.footer")

{!! Html::script("lib/jquery-3.1.0/jquery-3.1.0.min.js") !!}
{!! Html::script("lib/bootstrap-3.3.7/js/bootstrap.min.js") !!}
@yield("headerJS") {{--Inclus le JS spécifique à chaque page--}}
</body>
</html>