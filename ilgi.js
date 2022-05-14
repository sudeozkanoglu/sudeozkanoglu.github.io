const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
		'X-RapidAPI-Key': '4a84cfaa48msh3bb53ed113521d0p1aa5b4jsn7cc849cb09d0'
	}
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=avengers', options)
	.then(response => response.json())
	.then(data => {
		const list=data.d;
	
		list.map((item) => {
			const id=item.id;
			const name=item.l;
			const poster=item.i.imageUrl;
			const video="https://www.youtube.com/watch?v=-onk-Qm7ATw";
			const movie =`<li><img src="${poster}"><h2>${name}</h2></li>`
			if(id=="tt0848228"){
				document.querySelector('.movies').innerHTML += movie;
			}
			else if(id=="tt4154756"){
				document.querySelector('.movies').innerHTML += movie;
			}
			else if(id=="tt2395427"){
				document.querySelector('.movies').innerHTML += movie;
			}
			else if(id=="tt4154796"){
				document.querySelector('.movies').innerHTML+=movie;
			}
				
			
		})
	})
	.catch(err => console.error(err));