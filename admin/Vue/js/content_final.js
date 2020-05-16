
//----------------------------------------------------
// News Feed
//----------------------------------------------------

var check = []
if (typeof localStorage["rows"] != "undefined" && localStorage["rows"] != "undefined") {
	var check = JSON.parse(window.localStorage.getItem('rows'));
	localStorage.setItem('rows', JSON.stringify(check));
}

function getDefault() {

	var check = [];
	var articleSource = '';
	var lastSource = '';

	var lastSource = JSON.parse(localStorage.getItem('source'));

	if (localStorage.getItem('source')) {
		var articleSource = lastSource;
	}else{
		articleSource = 'Random';
		localStorage.setItem("source", JSON.stringify(articleSource));
	}

	console.log(lastSource);

////////////////////////////////////////////////////////////////////////////

	$(document).ready(function() {
		$(window).keydown(function(event){
		  if(event.keyCode == 13) {
			event.preventDefault();
			return false;
		  }
		});
	});

//----------------------------------------------------
// Vue Content
//----------------------------------------------------  

	var randomNumber = null;
	
	new Vue({
	  el: '#app',
	  data: {
		search: '',
		rows: [],
		list: [],
		arrayList: [],
		arrayList2: [],
	  },
	  props: {
		selected: Boolean,
	  },
	  methods: {
		addRow(values){
			
			this.selected = true

			var check = []
			if (typeof localStorage["rows"] != "undefined" && localStorage["rows"] != "undefined") {
				var check = JSON.parse(window.localStorage.getItem('rows'));
			}
			SaveRaw(values,check);

			function SaveRaw(params,lastRaw){
				var newList = {}
				newList.description = params.description,
				newList.city = params.city,
				newList.country = params.country,
				newList.imageown = params.imageown,
				newList.link = params.link,
				newList.imageurl = params.imageurl	
				lastRaw.push(newList)

				localStorage.setItem('rows', JSON.stringify(lastRaw));
				console.log(lastRaw);

				//important!!!

				var counter = 0;
				var form = document.getElementById('theform'+ counter);

				while ( form  )
				{
					form.addEventListener('submit', function(){
						var showField = document.getElementById(0);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});

					form.addEventListener('submit', function(){
						var showField = document.getElementById(1);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});		
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(2);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(3);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(4);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(5);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(6);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(7);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(8);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(9);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(10);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(11);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});						
				
					form.addEventListener('submit', function(){
						var showField = document.getElementById(12);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	

					form.addEventListener('submit', function(){
						var showField = document.getElementById(13);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(14);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(15);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(16);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(17);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});		
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(18);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(19);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(20);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});						

					form.addEventListener('submit', function(){
						var showField = document.getElementById(21);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(22);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});		
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(23);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form.addEventListener('submit', function(){
						var showField = document.getElementById(24);
						var show = lastRaw;
						showField.value = JSON.stringify(show);
					});	
					
					form  = document.getElementById( "theform" + ( ++counter ));
				}
			}

		},	
        removeRow(index){
			if (localStorage.getItem("rows")) {
				if (this.rows.length > 1){
					this.rows.splice(index,1); // why is this removing only the last row?
					// if (this.rows < 1) this.selected = false
					localStorage.setItem('rows', JSON.stringify(this.rows));
				}
			}
		},
        addSearch(){
			if(!this.search) {
				this.search = 'Random';
				localStorage.setItem("source", JSON.stringify(this.search));
			  }else{
				var articleSource = this.search;
				localStorage.setItem("source", JSON.stringify(articleSource));
			}
			window.location.reload();
		},	

	  },
	  computed: {
			pageUrl() {
			return './home.php?sec=unsplash&sub=new?';
			}
	  },
	  created: function(){
		console.log('Component has been created!');

		if (typeof localStorage["rows"] != "undefined" && localStorage["rows"] != "undefined") {
			arrayList2 = JSON.parse(window.localStorage.getItem('rows'));
			console.log(arrayList2);
		}else{
			arrayList2 = []
			arrayList2.description = "null",
			arrayList2.city = "null",
			arrayList2.country = "null",
			arrayList2.imageown = "null",
			arrayList2.link = "null",
			arrayList2.imageurl = "null"
			localStorage.setItem('rows', JSON.stringify(arrayList2));
			arrayList2 = JSON.parse(window.localStorage.getItem('rows'));
			console.log(arrayList2);
		}

	  },
	  mounted () {
		let count = 0;
		while (count < 25){  
			randomNumber = Math.floor(Math.random() * 1000);
			axios
			//.get('https://api.unsplash.com/photos/random?page='+randomNumber+'&query='+ articleSource +'&client_id=542a52862af1d927653c8cea3899842958fcb6a9256496b58b7ac0be3eb3220b')
			.get('http://localhost:8080/Json/db.json')
			.then(response => {
				var list = {}
					list.description = response.data.description
					list.city = response.data.location.city
					list.country = response.data.location.country
					list.imageown = response.data.user.name
					list.link = response.data.user.links.html
					list.imageurl = response.data.urls.full
					this.arrayList.push(list)
				})  
			count++;
		}
	  }
	})   
}

getDefault();

//window.localStorage.removeItem('rows');

