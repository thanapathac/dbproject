var script = document.createElement('script');
script.src = 'http://code.jquery.com/jquery-1.11.0.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
var dButton = document.getElementsById('k');
if(dButton == null) alert("pass");
dButton.addEventListerner('click',a);
function a(){
	alert("hi");
}

alert("Kuy");





function deletphp(){
    type: "POST",
    url: 'test.php',
    dataType: 'json',
    data: {functionname: e},

    success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      yourVariable = obj.result;
                  }
                  else {
                      console.log(obj.error);
                  }
            }
};