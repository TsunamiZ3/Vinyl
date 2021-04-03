$(document).ready(function() {
  $('body').on('click','#header-image',function(){
    $('#page-content').load('../default/home.html #page-content');
  });
  $('body').on('click','#header-login',function(){
    $('#page-content').load('../default/login.html #page-content');
  });
  $('body').on('click','#header-about',function(){
    $('#page-content').load('../default/about.html #page-content');
  });
  $('body').on('click','#header-download',function(){
    $('#page-content').load('../default/download.html #page-content');
  });
});
