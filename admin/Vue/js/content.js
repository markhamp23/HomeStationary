//----------------------------------------------------
// News Feed
//----------------------------------------------------

var articleSource = '';
var lastSource = JSON.parse(window.localStorage.getItem('source'))

if (lastSource == null || typeof lastSource == 'undefined') {
	articleSource = 'random';
}else{
	var articleSource = lastSource;
}

console.log(articleSource)

function getDefault() {
	
	var articleSource = '';
	var lastSource = JSON.parse(window.localStorage.getItem('source'))
	
	if (lastSource == null || typeof lastSource == 'undefined') {
		articleSource = 'random';
	}else{
		var articleSource = lastSource;
	}

	console.log(articleSource)

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
		check2: [],
		title: null,
	  },
	  props: {
		selected: Boolean,
	  },
	  
	  methods: {
        addRow(values){

			var check = []
			check = JSON.parse(window.localStorage.getItem('rows'))
	
			if (check == null || typeof check == 'undefined') {
				var newLlistat = {}
				newLlistat.description = values.description
				newLlistat.city = values.city
				newLlistat.country = values.country
				newLlistat.imageown = values.imageown
				newLlistat.link = values.link
				newLlistat.imageurl = values.imageurl	
				this.rows.push(newLlistat)
				this.selected = true	
			}else {
				var newLlistat = {}
				newLlistat.description = values.description
				newLlistat.city = values.city
				newLlistat.country = values.country
				newLlistat.imageown = values.imageown
				newLlistat.link = values.link
				newLlistat.imageurl = values.imageurl	
				this.rows.push(newLlistat)

				check.forEach((check) => {
					var newLlistat = {}
					newLlistat.description = check.description
					newLlistat.city = check.city
					newLlistat.country = check.country
					newLlistat.imageown = check.imageown
					newLlistat.link = check.link
					newLlistat.imageurl = check.imageurl
					this.rows.push(newLlistat)
				})
			}

			var uniqueArray = removeDuplicates(this.rows, "description")
				
			function removeDuplicates(originalArray, prop) {
				var newArray = [];
				var lookupObject  = {};
		
				for(var i in originalArray) {
				lookupObject[originalArray[i][prop]] = originalArray[i];
				}
		
				for(i in lookupObject) {
					newArray.push(lookupObject[i]);
				}
				return newArray;
			}

				window.localStorage.setItem('rows', JSON.stringify(uniqueArray));
				console.log(JSON.parse(window.localStorage.getItem('rows')))	
				this.selected = true;

				var check2 = []
				check2 = JSON.parse(window.localStorage.getItem('rows'))

				axios({
					url: 'home.php?sec=unsplash&sub=new',
					method: 'post',
					data: check2
				})
					.then(response => (this.check2 = response.config['data']))
					.then(function (check2) {
						// your action after success
						console.log(check2);
					})
					.catch(function (error) {
						// your action on error success
						console.log(error);
					});

        },
        removeRow(index,rows){
		   this.rows.splice(index,1); // why is this removing only the last row?
		   if (rows < 1) this.selected = false

		   const check = JSON.stringify(this.rows)
		   window.localStorage.setItem('rows', check);
		},
        addSearch(){
			var articleSource = this.search
			localStorage.setItem('source', articleSource)

			this.title = document.getElementById("title").value    // set the value to this input

			window.location.reload();
			console.log(this.title);



		 },		
	},
	
	  	computed: {
		pageUrl() {
		  return 'home.php?sec=unsplash&sub=new?'+check2;
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

	$('#form-id').on('submit', function(){
		var $this = $("#form-id input");
		var articleSource = $this.val();
		localStorage.setItem('source', articleSource);
	});	

}

// Load Reuters on page load
getDefault();

//window.localStorage.removeItem('rows');

$('#search').on('click', function(){
	var $this = $("#form-id input");
	var articleSource = $this.val();
	localStorage.setItem('source', articleSource);
	window.location.href="home.php?sec=unsplash&sub=new"
});