<html>
<script>

function up(id)
{
    if(document.getElementById(id).innerHTML<10) 
    {
        document.getElementById(id).innerHTML++;
        document.getElementById('error_label').innerHTML = 'NEXT';
        document.getElementById('error_label').onclick = 'next_counter';
    }
    if(document.getElementById(id).innerHTML>10 || document.getElementById(id).innerHTML<5) document.getElementById('error_label').innerHTML = 'Limit Reached!';
}

function down(id)
{
    if(document.getElementById(id).innerHTML>4) 
    {
        document.getElementById(id).innerHTML--;
        document.getElementById('error_label').innerHTML = 'NEXT';
        document.getElementById('error_label').onclick = next_counter;
    }
    if(document.getElementById(id).innerHTML>10 || document.getElementById(id).innerHTML<4) document.getElementById('error_label').innerHTML = 'Limit Reached!';
}

</script>
<center>
<div class="counter">

<div class="day" style="display: inline-block;margin:100px;">
<center>
<button class="bttn-slant bttn-md bttn-warning" >Number of Days</button><br><br>
<button class="bttn-material-flat bttn-md bttn-success" onclick="up('days')" > &#x25B3 </button>
<div id="days" style="font-size: 150px;">6</div>
<button class="bttn-material-flat bttn-md bttn-danger" onclick="down('days')"> &#x25BD </button>
</center>
</div>

<div class="hour" style="display: inline-block;margin:100px;">
    <center>
    <button class="bttn-slant bttn-md bttn-warning" >Hours per day</button><br><br>
    <button class="bttn-material-flat bttn-md bttn-success" onclick="up('hours')" > &#x25B3 </button>
    <div id="hours" style="font-size: 150px;">6</div>
    <button class="bttn-material-flat bttn-md bttn-danger" onclick="down('hours')"> &#x25BD </button>
    </center>
    </div>
    <br><br><br><br>  <button class="bttn-material-flat bttn-md bttn-primary" id="error_label" onclick="next_counter()" >NEXT</button>

</div>
</center>
</html>