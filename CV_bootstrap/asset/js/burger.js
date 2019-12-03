if (window.innerWidth <= 405)
{
	var sommaire = document.getElementById('sommaire');
	var header = document.getElementById('header');
	var content = document.getElementsByClassName('content')
	var cliquez = document.getElementById('cliquez');
	var condition = -1;
	header.addEventListener('click',function(){
		if(condition==1)
		{
			sommaire.style.display = "none";
			header.style.height = "30px";
			for (var i=0; i<content.length;i++)
			{
				content[i].style.paddingTop =  "70px";
			}
			header.style.background = "brown";
			cliquez.style.display = "block";
		}

		else
		{
			sommaire.style.display = "flex";
			sommaire.background = "white";
				for (var i=0; i<content.length;i++)
			{
				content[i].style.paddingTop =  "110px";
			}
			header.style.background= "white";
			cliquez.style.display = "none";
		}
		condition *= -1;

	});
}