<html>   
   <head>
    <meta charset="utf-8">
    <script src="js/jquery.min.js"></script> 
    <script src='https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit' async defer></script>    
    <script>
      var recaptcha1;
      var recaptcha2;
      var myCallBack = function() {
        //Render the recaptcha1 on the element with ID "recaptcha1"
        recaptcha1 = grecaptcha.render('recaptcha1', {
          'sitekey' : '6Lf72SMUAAAAAJ6arCuJnrxm9zCvcHXiA-pBTXw3', //Replace this with your Site key
          'theme' : 'light'
        });
        
        //Render the recaptcha2 on the element with ID "recaptcha2"
        recaptcha2 = grecaptcha.render('recaptcha2', {
          'sitekey' : '6Lf72SMUAAAAAJ6arCuJnrxm9zCvcHXiA-pBTXw3', //Replace this with your Site key
          'theme' : 'light'
        });
      };
      $(document).ready(function() {      
 		$("#query1").click(function(e){
 			alert($("#form1 #g-recaptcha-response").val());
 			//alert($("#recaptcha1").html());
 		});
 		$("#query2").click(function(e){
 			alert($("#form2 #g-recaptcha-response-1").val());
 			//alert($("#recaptcha2").html()); 			
 		}); 		
      });     
    </script>        
   </head>
  <body>
    <fomr mothod='post' action='#' id='form1'>
        <div class="g-recaptcha" id='recaptcha1' data-sitekey="6Lf72SMUAAAAAJ6arCuJnrxm9zCvcHXiA-pBTXw3"></div>
        <button id='query1'>Submit</button>
    </form>    
    <fomr mothod='post' action='#' id='form2'>
        <div class="g-recaptcha" id='recaptcha2' data-sitekey="6Lf72SMUAAAAAJ6arCuJnrxm9zCvcHXiA-pBTXw3"></div>
        <button id='query2'>Submit</button>        
    </form>  
  </body>
</html>
