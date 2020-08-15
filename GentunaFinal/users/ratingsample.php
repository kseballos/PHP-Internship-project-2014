
		
		
		<script>
 window.onload = function()
 {
    document.getElementsByName('mydropdown')[0].onchange = function(e)
    {
      document.getElementById('mylabel').innerHTML = this.value;
    };
 }
</script>
<td>
   <div name="mydropdown" id="mydrop" onchange="">
      <input type="radio" value="5" ></input>
      <input type="radio" value="4"></input>
      <input  type="radio"value="3"></input>
	  <input  type="radio"value="2"></input>
      <input  type="radio"value="1"></input>
   </div>
</td>

<td><label id="mylabel"></label></td>