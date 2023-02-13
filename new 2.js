
		
			<script>
			function myFunction(){
			let text;
			let person = prompt("Name:","Harry Potter");
			if(person == null || person == "")(
			text = "User cancelled the prompt.";
			} else {
			text = "Hello" + person + "! How are you today?";
			}
			document.getElementById("demo").innerHTML = text;
			}
			</script>
			<script src=""></script>
	</body>
</html>	