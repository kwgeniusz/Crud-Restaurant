

   //INSTANCIA DE VUE PARA LA SECCION DE ALIMENTOS Y PLATOS
var vueApp = new Vue({
    el: '#vueApp',
    data: {
      //variables food, recipes
        idFood:'',
        nameFood:'',
        weight: '',
        typeFood: '',

        requiredQuantity:'',

        nameRecipe:'',
        recipe:[],

        //variables production,kitchen
        idFoodProduction:'',
        quantityProduction:'',
        idRecipe: '',
        buttonPlate: false,
    },
    methods: {
 //PARA EL PROCESO DE PREPARACION DE PLATOS
        //TRAER DATOS DE PESO DE ALIMENTOS
        checkWeight: function (id){
            var url ='getWeight/'+id;
            axios.get(url).then(response => {
               
               this.nameFood = response.data.name
               this.weight   = response.data.weight
               this.typeFood = response.data.type
            });
        },
        aggFood: function (idFood,nameFood,requiredQuantity){
            if(idFood.trim() && requiredQuantity.trim()){ 
            this.recipe.push({id:idFood,name:nameFood,peso:requiredQuantity})
            }
        },
        removeFood: function (){
            this.recipe.pop()
        },

        processRecipe: function (){
            var url ='recipeCreate';
            axios.post(url,{
                recipe: this.recipe,
                nameRecipe: this.nameRecipe
            }).then(response => {
               alert("Receta Creada Correctamente")
               this.idfood = "";
               this.nameFood= "";
               this.requiredQuantity= "";
               this.nameRecipe= "";
               this.recipe = [];

            });
        },
//PARA EL PROCESO DE KITCHEN
    checkWeightProduction: function (id){
        var url ='getWeightProduction/'+id;
        axios.get(url).then(response => {
           this.quantityProduction   = response.data.quantityProduction
        });
    },

    searchRecipeDetails: function (idRecipe){

        if(this.recipe == ''){ 
        var url ='getRecipeDetails/'+idRecipe;
        axios.get(url).then(response => {
    
            response.data.forEach(food => {
              this.recipe.push({id:food.idFood,name: food.name,peso:food.pivot.quantity,existencia: food.existencia})         
              this.buttonPlate = true;
            });
         });
        }
        
      },

      removePlate: function (){
        this.recipe = [];
        this.buttonPlate = false;
    },

      processPlate: function (){
        //ESTA LINEA REALIZA UN BUSQUEDA EN LA LISTA DE INGREDIENTES PARA SABER SI HACE FALTA CANTIDAD DE ALGUN INGREDIENTE
      const resultado = this.recipe.find( array => array.existencia === false );
      // ENVIARME A EL PROCESO DE RESTA DE PRODUCCION Y CREACION DEL PLATO
      if(resultado == undefined){

            var url ='kitchenCreate';
                axios.post(url,{
                   idRecipe: this.idRecipe,
                   recipe: this.recipe,
              }).then(response => {
                 alert("Plato Creado Correctamente")
                 this.idRecipe= "";
                 this.recipe = [];
                 this.buttonPlate = false;
              });
   
    // CASO CONTRARIO ENVIA ERROR
      }else { 
        alert('ERROR: NO HAY SUFICIENTE CANTIDAD EN PRODUCCION PARA ELABORAR EL PLATO');
      }
    },

    } // CIERRE DE METHOD
  }) //CIERRE INSTANCIA DE VUE