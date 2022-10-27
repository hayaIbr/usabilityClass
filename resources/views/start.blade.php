@extends('layout.mainlayout')

@section('start')
active
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
<span id="test"></span>
            <div class="card">
                <div class="body1">
                    <div class="cd-horizontal-timeline loaded">
                        <div class="timeline">
                            <div class="events-wrapper">
                                <div class="events" style="width: 1800px;">
                                    <ol>
                                        @empty($selected)
                                        <li><a href="#0" data-date="16/01/2017" style="right: 100px;" class="selected">انسخ الآراء</a></li>
                                        <li><a href="#0" data-date="28/02/2017" style="right: 240px;" >اختر الصفات</a></li>
                                        <li><a href="#0" data-date="20/04/2017" style="right: 380px;" >معلومات التطبيق</a></li>
                                        <li><a href="#0" data-date="20/05/2017" style="right: 570px;">انشئ التقرير</a></li>
                                    </ol>
                                    <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.281506);"></span>
                                </div>
                                <!-- .events -->
                            </div>
                           <!-- .events-wrapper -->

                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ol>
                                <li class="selected" data-date="16/01/2017">
                                    <h4 class="text-center">الآراء والمراجعات<br>
                                                <small>انسخها والصقها هنا
                                                    <br>
                                                    ملاحظة: كل رأي في سطر من فضلك!
                                                </small>
                                            </h4>
                                    <hr>
                                <div class="container p-4">

                                 @include('reviewsForm')
                                </div>
                                 <!--<button class="btn btn-primary"> التالي</button>-->
                                </li>
                                <li data-date="28/02/2017" class="">
                                    <h4 class="text-center">سهولة الاستخدام<br>
                                        <small>اي صفات سهولة الاستخدام تريد؟</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('classesChoice') <!-- write here the name of the page for this step-->
                            </div>

                                </li>
                                <li data-date="20/04/2017">
                                    <h4 class="text-center">تطبيقك<br>
                                        <small>هل من معلومات تريد اضافتها للتقرير؟</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('appInfo') <!-- write here the name of the page for this step-->
                            </div>

                                </li>
                                <li data-date="20/05/2017">
                                    <h4 class="text-center">التقرير<br>
                                        <small>ها هو تقرير التطبيق جاهز!</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('finalReport') <!-- write here the name of the page for this step-->
                            </div>
                                </li>

                            </ol>
                            @endempty
                            @if($selected=="classes")
                            <li><a href="#0" data-date="16/01/2017" style="right: 100px;">انسخ الآراء</a></li>
                                        <li><a href="#0" data-date="28/02/2017" style="right: 240px;" class="selected" >اختر الصفات</a></li>
                                        <li><a href="#0" data-date="20/04/2017" style="right: 380px;" >معلومات التطبيق</a></li>
                                        <li><a href="#0" data-date="20/05/2017" style="right: 570px;">انشئ التقرير</a></li>
                                    </ol>
                                    <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.281506);"></span>
                                </div>
                                <!-- .events -->
                            </div>
                           <!-- .events-wrapper -->

                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ol>
                                <li data-date="16/01/2017">
                                    <h4 class="text-center">الآراء والمراجعات<br>
                                                <small>انسخها والصقها هنا</small>
                                            </h4>
                                    <hr>
                                <div class="container p-4">

                                 @include('reviewsForm')
                                </div>
                                 <!--<button class="btn btn-primary"> التالي</button>-->
                                </li>
                                <li class="selected" data-date="28/02/2017" class="">
                                    <h4 class="text-center">سهولة الاستخدام<br>
                                        <small>اي صفات سهولة الاستخدام تريد؟</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('classesChoice') <!-- write here the name of the page for this step-->
                            </div>

                                </li>
                                <li data-date="20/04/2017">
                                    <h4 class="text-center">تطبيقك<br>
                                        <small>هل من معلومات تريد اضافتها للتقرير؟</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('appInfo') <!-- write here the name of the page for this step-->
                            </div>

                                </li>
                                <li data-date="20/05/2017">
                                    <h4 class="text-center">التقرير<br>
                                        <small>ها هو تقرير التطبيق جاهز!</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('finalReport') <!-- write here the name of the page for this step-->
                            </div>
                                </li>

                            </ol> @elseif($selected == "app info")
                            <li><a href="#0" data-date="16/01/2017" style="right: 100px;">انسخ الآراء</a></li>
                                        <li><a href="#0" data-date="28/02/2017" style="right: 240px;" >اختر الصفات</a></li>
                                        <li><a href="#0" data-date="20/04/2017" style="right: 380px;" class="selected" >معلومات التطبيق</a></li>
                                        <li><a href="#0" data-date="20/05/2017" style="right: 570px;">انشئ التقرير</a></li>
                                    </ol>
                                    <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.281506);"></span>
                                </div>
                                <!-- .events -->
                            </div>
                           <!-- .events-wrapper -->

                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ol>
                                <li data-date="16/01/2017">
                                    <h4 class="text-center">الآراء والمراجعات<br>
                                                <small>انسخها والصقها هنا</small>
                                            </h4>
                                    <hr>
                                <div class="container p-4">

                                 @include('reviewsForm')
                                </div>
                                 <!--<button class="btn btn-primary"> التالي</button>-->
                                </li>
                                <li data-date="28/02/2017" class="">
                                    <h4 class="text-center">سهولة الاستخدام<br>
                                        <small>اي صفات سهولة الاستخدام تريد؟</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('classesChoice') <!-- write here the name of the page for this step-->
                            </div>

                                </li>
                                <li class="selected" data-date="20/04/2017">
                                    <h4 class="text-center">تطبيقك<br>
                                        <small>هل من معلومات تريد اضافتها للتقرير؟</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('appInfo') <!-- write here the name of the page for this step-->
                            </div>

                                </li>
                                <li data-date="20/05/2017">
                                    <h4 class="text-center">التقرير<br>
                                        <small>ها هو تقرير التطبيق جاهز!</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('finalReport') <!-- write here the name of the page for this step-->
                            </div>
                                </li>

                            </ol>
                            @elseif($selected == "report")
                            <li><a href="#0" data-date="16/01/2017" style="right: 100px;">انسخ الآراء</a></li>
                                        <li><a href="#0" data-date="28/02/2017" style="right: 240px;" >اختر الصفات</a></li>
                                        <li><a href="#0" data-date="20/04/2017" style="right: 380px;" >معلومات التطبيق</a></li>
                                        <li><a href="#0" data-date="20/05/2017" style="right: 570px;" class="selected" >انشئ التقرير</a></li>
                                    </ol>
                                    <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.281506);"></span>
                                </div>
                                <!-- .events -->
                            </div>
                           <!-- .events-wrapper -->

                            <!-- .cd-timeline-navigation -->
                        </div>
                        <!-- .timeline -->
                        <div class="events-content">
                            <ol>
                                <li data-date="16/01/2017">
                                    <h4 class="text-center">الآراء والمراجعات<br>
                                                <small>انسخها والصقها هنا</small>
                                            </h4>
                                    <hr>
                                <div class="container p-4">

                                 @include('reviewsForm')
                                </div>
                                 <!--<button class="btn btn-primary"> التالي</button>-->
                                </li>
                                <li data-date="28/02/2017" class="">
                                    <h4 class="text-center">سهولة الاستخدام<br>
                                        <small>اي صفات سهولة الاستخدام تريد؟</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('classesChoice') <!-- write here the name of the page for this step-->
                            </div>

                                </li>
                                <li data-date="20/04/2017">
                                    <h4 class="text-center">تطبيقك<br>
                                        <small>هل من معلومات تريد اضافتها للتقرير؟</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('appInfo') <!-- write here the name of the page for this step-->
                            </div>

                                </li>
                                <li class="selected" data-date="20/05/2017">
                                    <h4 class="text-center">التقرير<br>
                                        <small>ها هو تقرير التطبيق جاهز!</small>
                                    </h4>
                            <hr>
                            <div class="container p-4">
                            @include('finalReport') <!-- write here the name of the page for this step-->
                            </div>
                                </li>

                            </ol>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


<style>

.body1{
    margin-top:20px;
}



.cd-horizontal-timeline ol, .cd-horizontal-timeline ul {
  list-style: none;
}
.cd-timeline-navigation a:hover, .cd-timeline-navigation a:focus {
   border-color:#313740;

}
.cd-horizontal-timeline a, .cd-horizontal-timeline a:hover, .cd-horizontal-timeline a:focus{ color:#313740;}
.cd-horizontal-timeline blockquote, .cd-horizontal-timeline q {
  quotes: none;
}
.cd-horizontal-timeline blockquote:before, .cd-horizontal-timeline blockquote:after,
.cd-horizontal-timeline q:before, .cd-horizontal-timeline q:after {
  content: '';
  content: none;
}
.cd-horizontal-timeline table {
  border-collapse: collapse;
  border-spacing: 0;
}
.cd-horizontal-timeline {
  opacity: 0;
  margin: 2em auto;
  -webkit-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  transition: opacity 0.2s;
}
.cd-horizontal-timeline::before {
  /* never visible - this is used in jQuery to check the current MQ */
  content: 'mobile';
  display: none;
}
.cd-horizontal-timeline.loaded {
  /* show the timeline after events position has been set (using JavaScript) */
  opacity: 1;
}
.cd-horizontal-timeline .timeline {
  position: relative;
  height: 100px;
  width: 90%;
  max-width: 800px;
  margin: 0 auto;
}
.cd-horizontal-timeline .events-wrapper {
  position: relative;
  height: 100%;
  margin: 0 20px;
  overflow: hidden;
}
.cd-horizontal-timeline .events-wrapper::after, .cd-horizontal-timeline .events-wrapper::before {
  /* these are used to create a shadow effect at the sides of the timeline */
  content: '';
  position: absolute;
  z-index: 2;
  top: 0;
  height: 100%;
  width: 20px;
}
.cd-horizontal-timeline .events-wrapper::before {
  right: 0;

}
.cd-horizontal-timeline .events-wrapper::after {
  left: 0;

}
.cd-horizontal-timeline .events {
  /* this is the grey line/timeline */
  position: absolute;
  z-index: 1;
  right: 0;
  top: 50px;
  height: 2px;
  /* width will be set using JavaScript */
  background: #dfdfdf;
  -webkit-transition: -webkit-transform 0.4s;
  -moz-transition: -moz-transform 0.4s;
  transition: transform 0.4s;
}
.cd-horizontal-timeline .filling-line {
  /* this is used to create the green line filling the timeline */
  position: absolute;
  z-index: 1;
  right: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: #313740;
  -webkit-transform: scaleX(0);
  -moz-transform: scaleX(0);
  -ms-transform: scaleX(0);
  -o-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: right center;
  -moz-transform-origin: right center;
  -ms-transform-origin: right center;
  -o-transform-origin: right center;
  transform-origin: right center;
  -webkit-transition: -webkit-transform 0.3s;
  -moz-transition: -moz-transform 0.3s;
  transition: transform 0.3s;
}
.cd-horizontal-timeline .events a {
  position: absolute;
  bottom: 0;
  z-index: 2;
  text-align: center;
  font-size: 1rem;
  padding-bottom: 15px;

  /* fix bug on Safari - text flickering while timeline translates */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
}
.cd-horizontal-timeline .events a::after {
  /* this is used to create the event spot */
  content: '';
  position: absolute;
  left: 50%;
  right: auto;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  bottom: -5px;
  height: 12px;
  width: 12px;
  border-radius: 50%;
  border: 2px solid #dfdfdf;
  background-color: #f8f8f8;
  -webkit-transition: background-color 0.3s, border-color 0.3s;
  -moz-transition: background-color 0.3s, border-color 0.3s;
  transition: background-color 0.3s, border-color 0.3s;
}
.no-touch .cd-horizontal-timeline .events a:hover::after {
  background-color: #313740;
  border-color: #313740;
}
.cd-horizontal-timeline .events a.selected {
  pointer-events: none;
}
.cd-horizontal-timeline .events a.selected::after {
  background-color: #313740;
  border-color: #313740;
}
.cd-horizontal-timeline .events a.older-event::after {
  border-color: #313740;
}
@media only screen and (min-width: 1100px) {
  .cd-horizontal-timeline::before {
    /* never visible - this is used in jQuery to check the current MQ */
    content: 'desktop';
  }
}

.cd-timeline-navigation a {
  /* these are the left/right arrows to navigate the timeline */
  position: absolute;
  z-index: 1;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  height: 34px;
  width: 34px;
  border-radius: 50%;
  border: 2px solid #dfdfdf;
  /* replace text with an icon */
  overflow: hidden;
  color: transparent;
  text-indent: 100%;
  white-space: nowrap;
  -webkit-transition: border-color 0.3s;
  -moz-transition: border-color 0.3s;
  transition: border-color 0.3s;
}
.cd-timeline-navigation a::after {
  /* arrow icon */
  content: '';
  position: absolute;
  height: 16px;
  width: 16px;
  left: 50%;
  top: 50%;
  bottom: auto;
  right: auto;
  -webkit-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  -o-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  background: url(../img/cd-arrow.svg) no-repeat 0 0;
}
.cd-timeline-navigation a.prev {
  right: 0;
  -webkit-transform: translateY(-50%) rotate(180deg);
  -moz-transform: translateY(-50%) rotate(180deg);
  -ms-transform: translateY(-50%) rotate(180deg);
  -o-transform: translateY(-50%) rotate(180deg);
  transform: translateY(-50%) rotate(180deg);
}
.cd-timeline-navigation a.next {
  left: 0;
}
.no-touch .cd-timeline-navigation a:hover {
  border-color: #7b9d6f;
}
.cd-timeline-navigation a.inactive {
  cursor: not-allowed;
}
.cd-timeline-navigation a.inactive::after {
  background-position:  -16 0px;
}
.no-touch .cd-timeline-navigation a.inactive:hover {
  border-color: #dfdfdf;
}

.cd-horizontal-timeline .events-content {
  position: relative;
  width: 100%;
  margin: 2em 0;
  overflow: hidden;
  -webkit-transition: height 0.4s;
  -moz-transition: height 0.4s;
  transition: height 0.4s;
}
.cd-horizontal-timeline .events-content li {
  position: absolute;
  z-index: 1;
  width: 100%;
  left: 0;
  top: 0;
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  -o-transform: translateX(-100%);
  transform: translateX(-100%);
  padding: 0 5%;
  opacity: 0;
  -webkit-animation-duration: 0.4s;
  -moz-animation-duration: 0.4s;
  animation-duration: 0.4s;
  -webkit-animation-timing-function: ease-in-out;
  -moz-animation-timing-function: ease-in-out;
  animation-timing-function: ease-in-out;
}
.cd-horizontal-timeline .events-content li.selected {
  /* visible event content */
  position: relative;
  z-index: 2;
  opacity: 1;
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}
.cd-horizontal-timeline .events-content li.enter-right, .cd-horizontal-timeline .events-content li.leave-right {
  -webkit-animation-name: cd-enter-right;
  -moz-animation-name: cd-enter-right;
  animation-name: cd-enter-right;
}
.cd-horizontal-timeline .events-content li.enter-left, .cd-horizontal-timeline .events-content li.leave-left {
  -webkit-animation-name: cd-enter-left;
  -moz-animation-name: cd-enter-left;
  animation-name: cd-enter-left;
}
.cd-horizontal-timeline .events-content li.leave-right, .cd-horizontal-timeline .events-content li.leave-left {
  -webkit-animation-direction: reverse;
  -moz-animation-direction: reverse;
  animation-direction: reverse;
}
.cd-horizontal-timeline .events-content li > * {
  max-width: 800px;
  margin: 0 auto;
}
.cd-horizontal-timeline .events-content h4 {
  font-weight: 700;
  margin-bottom: 0px;
  line-height: 20px;
  margin-bottom: 15px;
}
.cd-horizontal-timeline .events-content h4 small {
  font-weight: 400;
  line-height: normal;
  font-size: 15px;
}
.cd-horizontal-timeline .events-content em {
  display: block;
  font-style: italic;
  margin: 10px auto;
}
.cd-horizontal-timeline .events-content em::before {
  content: '- ';
}
.cd-horizontal-timeline .events-content p {
  font-size: 16px;
  margin-top: 15px;

}

@media only screen and (min-width: 768px) {

  .cd-horizontal-timeline .events-content em {
    font-size: 1rem;
  }
}

@media only screen and (max-width: 767px) {

  .cd-horizontal-timeline.loaded{ margin: 0;}
  .cd-horizontal-timeline .timeline{ width: 100%;}
  .cd-horizontal-timeline ol, .cd-horizontal-timeline ul{padding: 0;margin: 0;}
  .cd-horizontal-timeline .events-content h4{ font-size: 16px;}
  .cd-horizontal-timeline .events-content{ margin: 0;}

}

@-webkit-keyframes cd-enter-left {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0%);
  }
}
@-moz-keyframes cd-enter-left {
  0% {
    opacity: 0;
    -moz-transform: translateX(100%);
  }
  100% {
    opacity: 1;
    -moz-transform: translateX(0%);
  }
}
@keyframes cd-enter-left {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}
@-webkit-keyframes cd-enter-right {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0%);
  }
}
@-moz-keyframes cd-enter-right {
  0% {
    opacity: 0;
    -moz-transform: translateX(-100%);
  }
  100% {
    opacity: 1;
    -moz-transform: translateX(0%);
  }
}
@keyframes cd-enter-right {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100%);
    -moz-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    -o-transform: translateX(-100%);
    transform: translateX(-100%);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}
.timeline:before{
  content: " ";
    display:none;
    bottom: 0;
    right: 0%;
    width: 0px;
    margin-right: -1.5px;
    background-color: #eeeeee;
}
</style>

@endsection
