<html>
<head>
<script type="text/javascript" src="jquery.min.js"></script>

<script language="javascript" type="text/javascript">

//loader image starts here
function loading(){
    document.getElementById('loading').style.display='';
    //document.getElementById('loading').style.display='none'; 
    }
    function Unloading(){
    //document.getElementById('loading').style.display='';
    document.getElementById('loading').style.display='none'; 
}
//loader image ends here

function show_browse()
{
    loading();
   // alert('you are invoking the show browse method');
   
       var ifr=$('<iframe></iframe>', {
            id:'MainPopupIframe',
            src:'https://www.facebook.com/dialog/feed?app_id=141176039405657&link=http://blog.adw.org/2013/06/on-sloth-and-the-noonday-devil/&picture=http://pewsitter.com/uploaded_img/news/0610-490bd270d5a3.jpg&name=On%20Sloth%20and%20the%20Noonday%20Devil&redirect_uri=http://www.pewsitter.com/',
            style:'display:none;width:100%;height:640px',
            load:function(){
                $(this).show();
                Unloading();
               // alert('iframe loaded !');
            }
       
        });
     $('body').append(ifr);
}

$(document).ready(function(){

   
    //invoke show_browse
    show_browse();

});

</script>
<style type="text/css">
#loading {
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  position: fixed;
  display: block;
  opacity: 0.7;
  background-color: #fff;
  z-index: 99;
  text-align: center;
}
#loading-image {
  position: absolute;
  top: 230px;
  left: 120px;
  z-index: 100;
}

</style>
</head>

<body>

<div id="loading"  style="background-repeat: no-repeat; background-position: center center; height:100%; display:none "> loading............ </div>

</body>

</html>




"https://www.facebook.com/dialog/feed?app_id=141176039405657&link=".$url."&picture=".$picture."&name=".$title."&redirect_uri=http://www.pewsitter.com/"

" https://twitter.com/intent/tweet?text=".$title."&url=".$url."&via=pewsitter"