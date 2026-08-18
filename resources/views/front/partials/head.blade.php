<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- meta -->
<meta name="description"  content="BRAC James P Grant School of Public Health, BRAC University was founded in 2004 in Dhaka, Bangladesh to address the unmet public health challenges particular to Asia, Africa and South America.
">

<link rel="icon" href="{{asset('assets/images/favicon_io/favicon-32x32.png')}}" type="image/x-icon" />

<title>EV4GH</title>

{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

<!-- Fundraise Up: the new standard for online giving -->
<script>(function(w,d,s,n,a){if(!w[n]){var l='call,catch,on,once,set,then,track,openCheckout'
.split(','),i,o=function(n){return'function'==typeof n?o.l.push([arguments])&&o
:function(){return o.l.push([n,arguments])&&o}},t=d.getElementsByTagName(s)[0],
j=d.createElement(s);j.async=!0;j.src='https://cdn.fundraiseup.com/widget/'+a+'';
t.parentNode.insertBefore(j,t);o.s=Date.now();o.v=5;o.h=w.location.href;o.l=[];
for(i=0;i<8;i++)o[l[i]]=o(l[i]);w[n]=o}
})(window,document,'script','FundraiseUp','AGXVNSSK');</script>
<!-- End Fundraise Up -->


@include('front.partials.top-inc')
@yield('styles')