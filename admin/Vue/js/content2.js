
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
		articleSource = 'barcelona';
		localStorage.setItem("source", JSON.stringify(articleSource));
	}

	console.log(lastSource);

	if (typeof localStorage["rows"] != "undefined" && localStorage["rows"] != "undefined") {
		var check = JSON.parse(window.localStorage.getItem('rows'));
	}else{
		SaveDataToLocalStorage();
	}	

	function SaveDataToLocalStorage(){
		var check = [];
		var newLlistat = {}
		newLlistat.description = "null",
		newLlistat.city = "null",
		newLlistat.country = "null",
		newLlistat.imageown = "null",
		newLlistat.link = "null",
		newLlistat.imageurl = "null"
		check.push(newLlistat)
		localStorage.setItem('rows', JSON.stringify(check));
	}
	
	// console.log(check);

////////////////////////////////////////////////////////////////////////////

	$('#search').on('click', function(){
		var $this = $("#form-id input");
		if(!this.value ) {
			var $this = 'Random';
	  	}else{
			var articleSource = $this.val();
			localStorage.setItem("source", JSON.stringify(articleSource));
		}
		window.location.reload();
	});

	$(document).ready(function() {
		$(window).keydown(function(event){
		  if(event.keyCode == 13) {
			event.preventDefault();
			return false;
		  }
		});
	  });

	  $('#click').on('click', function(event){
		event.preventDefault();
		return false;
	});	  

//----------------------------------------------------
// Vue Content
//----------------------------------------------------  

	var randomNumber = null;
	
	new Vue({
	  el: '#app',
	  data: {
		search: null,
		arrayllista: [],
		rows: [],
		llistat: [],
		objeto : {numero1: '', numero2: ''},
		resultado: ''
	  },
	  props: {
		selected: Boolean,
	  },
	  methods: {

		sumaNumeros: function(){
			axios.post('almacena.php',this.createdFormData())
			.then((response) => {
			  this.resultado = response.data
			})
		  },
		  createdFormData : function (){
			var formDa = new FormData();
			for(var key in this.objeto){
				formDa.append(key, this.objeto[key]);
			}
			return formDa;
		},
		created: function(){
		  this.sumaNumeros()
		},


		get_data : function(){
			var check = []
			if (typeof localStorage["rows"] != "undefined" && localStorage["rows"] != "undefined") {
				var check = JSON.parse(window.localStorage.getItem('rows'));
			}
		    return check;
		},
		addRow(values){
			
			this.selected = true

			var check = []
			if (typeof localStorage["rows"] != "undefined" && localStorage["rows"] != "undefined") {
				var check = JSON.parse(window.localStorage.getItem('rows'));
			}
			SaveRaw(values,check);

			function SaveRaw(params,lastRaw){
				var newLlistat = {}
				newLlistat.description = params.description,
				newLlistat.city = params.city,
				newLlistat.country = params.country,
				newLlistat.imageown = params.imageown,
				newLlistat.link = params.link,
				newLlistat.imageurl = params.imageurl	
				lastRaw.push(newLlistat)

				localStorage.setItem('rows', JSON.stringify(lastRaw));
				// var uniqueArray = removeDuplicates(this.lastRaw, "description");
				// window.localStorage.setItem('rows', JSON.stringify(this.uniqueArray));
				console.log(check);
			}

			var check = []
			check = JSON.parse(window.localStorage.getItem('rows'))

			if (localStorage.getItem("rows")) {
				var newLlistat = {}
				newLlistat.description = values.description
				newLlistat.city = values.city
				newLlistat.country = values.country
				newLlistat.imageown = values.imageown
				newLlistat.link = values.link
				newLlistat.imageurl = values.imageurl	
				this.rows.push(newLlistat)
				this.selected = true
				//localStorage.setItem('rows', JSON.stringify(this.rows));
			}

			var check = []
			if (typeof localStorage["rows"] != "undefined" && localStorage["rows"] != "undefined") {
				var check = JSON.parse(window.localStorage.getItem('rows'));
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
	  mounted () {
		let count = 0;
		while (count < 25){  
			randomNumber = Math.floor(Math.random() * 1000);
			axios
			.get('https://api.unsplash.com/photos/random?page='+randomNumber+'&query='+ articleSource +'&client_id=542a52862af1d927653c8cea3899842958fcb6a9256496b58b7ac0be3eb3220b')
			.then(response => {
				var llistat = {}
					llistat.description = response.data.description
					llistat.city = response.data.location.city
					llistat.country = response.data.location.country
					llistat.imageown = response.data.user.name
					llistat.link = response.data.user.links.html
					llistat.imageurl = response.data.urls.full
					this.arrayllista.push(llistat)
				})  
			count++;
		}
	  }
	})   
}

// Load Reuters on page load

getDefault();

// window.onload = function() {};
//window.localStorage.removeItem('rows');



