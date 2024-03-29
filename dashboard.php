<?php
session_start();
include "header.php";
if(!isset($_SESSION["username"]))
{                               // if user is not login then they cannot open user side
    ?>
<script type="text/javascript">
    window.location="login.php";
</script>
    <?php
}
?>
        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;background-color:#f50a50;background-image: url(img/quiz5.jpg);background-repeat: no-repeat;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color:#f74077;">
                
                <!--start-->
                <br>
                <div class="row">
                    <br>
                    <div class="col-lg-2 col-lg-push-10" style="font-size: 20px;color: #2002e3">
                        
                        <div id="current_que" style="float: left">0</div>
                        <div style="float: left">/</div>
                        <div id="total_que" style="float: left">0</div>
                    </div>
                    
                    <div class="row"style="margin-top: 30px">
                        <div class="row">
                            <div class="col-lg-10 col-lg-push-1"style="min-height: 300px; background-color: #fae6ec;"id="load_questions">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <div class="col-lg-6 col-lg-push-3" style="min-height: 50px">
                            <div class="col-lg-12 text-center">
                                <input type="button" class="btn btn-warning"value="Previous"onclick="load_previous();">&nbsp;
                                <input type="button" class="btn btn-success"value="Next"onclick="load_next();">
                            </div>
                          </div>   
                        </div>
                    </div>
                <!--end-->  
            </div>
        </div>

<script type="text/javascript">
    function load_total_que()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("total_que").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","forajax/load_total_que.php",true);
        xmlhttp.send(null);
    } 
    
    var questionno="1";      
    load_questions(questionno);       //load question number
    
    function load_questions(questionno)
    {
     document.getElementById("current_que").innerHTML=questionno; //disolay current question number
     var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
             
             if (xmlhttp.responseText =="over") //test is over go to result->load_questions.php
             {
                 window.location="result.php";
             }else{
                 document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                 load_total_que();
             }
            }
        };
        xmlhttp.open("GET","forajax/load_questions.php?questionno="+questionno,true);
        xmlhttp.send(null);   
    }
    
    //save answer inside session
    function radioclick(radiovalue,questionno)
    {
       var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
            }
        };
        xmlhttp.open("GET","forajax/save_answer_in_session.php?questionno="+questionno+"&value1="+radiovalue,true);
        xmlhttp.send(null); 
    }
    function load_previous()
    {
        if(questionno=="1") //first question
        {
            load_questions(questionno); //pass first question
        }else{
            questionno=eval(questionno)-1;   //else decrease question
            load_questions(questionno);
        }
    }
    function load_next()
    {
        questionno=eval(questionno)+1;
        load_questions(questionno);
    }
</script>

  <?php
  include 'footer.php';
  ?>
