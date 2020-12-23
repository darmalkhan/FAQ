@extends('layout')

@section('content')
@if  (App::isLocale('dr') || App::isLocale('ps')) 
<style>
  .panel-heading .accordion-toggle:after {
    /* symbol for "opening" panels */
    font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
    content: "\e114";    /* adjust as needed, taken from bootstrap.css */
    float: left;        /* adjust as needed */
    color: rgb(0, 0, 0);         /* adjust as needed */
}
.panel-heading .accordion-toggle.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\e080";    /* adjust as needed, taken from bootstrap.css */
}
.panel-title{
  direction: rtl;
  text-decoration: none;
}

.panel-body{
  direction: rtl
}

</style>
@endif
<div class = "container">

  
    <div class="panel-group" id="accordion">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration: none">
              {{ __('lang.key1')}}
            </a>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body">
            {{ __('lang.value1')}}
  
            </div>
      </div>
      </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration: none">
            {{ __('lang.key2')}}
          </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          {{ __('lang.value2')}}

          </div>
    </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading panel-heading-left">
        <h4 class="panel-title">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="text-decoration: none">
            {{ __('lang.key3')}}

                  </a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          {{ __('lang.value3')}}

          </div>
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading panel-heading-left">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="text-decoration: none">
          {{ __('lang.key4')}}

                </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
        {{ __('lang.value4')}}

        </div>
  </div>
</div>

<div class="panel panel-danger">
  <div class="panel-heading panel-heading-left">
    <h4 class="panel-title">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="text-decoration: none">
        {{ __('lang.key5')}}
        </a>
    </h4>
  </div>
  <div id="collapse5" class="panel-collapse collapse">
    <div class="panel-body">
      {{ __('lang.value5')}}

      </div>
</div>
</div>

<div class="panel panel-danger">
  <div class="panel-heading panel-heading-left">
    <h4 class="panel-title">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="text-decoration: none">
        {{ __('lang.key6')}}
              </a>
    </h4>
  </div>
  <div id="collapse6" class="panel-collapse collapse">
    <div class="panel-body">
      {{ __('lang.value6')}}<br>
          {{ __('lang.pdf')}}<a href="https://combinepdf.com/" target="_blank"> Combine Pdf</a><br>
          {{ __('lang.img')}}<a href="https://imagecompressor.com/" target="_blank"> Image compressor</a>

      </div>
</div>
</div>

<div class="panel panel-danger">
  <div class="panel-heading panel-heading-left">
    <h4 class="panel-title">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="text-decoration: none">
        {{ __('lang.key7')}}

              </a>
    </h4>
  </div>
  <div id="collapse7" class="panel-collapse collapse">
    <div class="panel-body">
      {{ __('lang.value7')}}

      </div>
</div>
</div>

<div class="panel panel-danger">
  <div class="panel-heading panel-heading-left">
    <h4 class="panel-title">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse8" style="text-decoration: none">
        {{ __('lang.key8')}}

              </a>
    </h4>
  </div>
  <div id="collapse8" class="panel-collapse collapse">
    <div class="panel-body">
      {{ __('lang.value8')}}

      </div>
</div>
</div>

<div class="panel panel-danger">
  <div class="panel-heading panel-heading-left">
    <h4 class="panel-title">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse9" style="text-decoration: none">
        {{ __('lang.key9')}}

              </a>
    </h4>
  </div>
  <div id="collapse9" class="panel-collapse collapse">
    <div class="panel-body">
      {{ __('lang.value9')}}

      </div>
</div>
</div>
    </div>
  </div> <!-- end container -->
  
@stop

