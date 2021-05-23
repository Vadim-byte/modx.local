


 var cart = {
	'p1' : { 
	"name" : "Ноутбук LENOVO ideapad S145-15API Platinum Grey (81UT000XRA)",
	"count" : 0,
	"price" : 12999,
	},
	
	'p2' : { 
	"name" : "Ноутбук Ноутбук MSI Modern 14 Gray (M14B10MW-437XUA)",
	"count" : 0,
	"price" : 15999,
	},
	
	'p3' : { 
	"name" : "Ноутбук Samsung Omen X 2S 15-dg0002ur (7BV20EA) Shadow Black",
	"count" : 0,
	"price" : 59000,
	},
	
	'p4' : { 
	"name" : "Ноутбук Asus X543MA-GQ496",
	"count" : 0,
	"price" : 14499,
	},
	
	'p5' : { 
	"name" : "Ноутбук MacBook Air 2019",
	"count" : 0,
	"price" : 29999,
	},
	
	'p6' : { 
	"name" : "Ноутбук MacBook Air 2017",
	"count" : 0,
	"price" : 26499,
	},
	
	'p7' : { 
	"name" : "Навушники Sven 312b",
	"count" : 0,
	"price" : 699,
	},
	
	'p8' : { 
	"name" : "Навушники Sven 3442a",
	"count" : 0,
	"price" : 299,
	},
	
	'p9' : { 
	"name" : "Навушники Aboba 331",
	"count" : 0,
	"price" : 9999,
	},
	
	'p10' : { 
	"name" : "Навушники Animetyan G224",
	"count" : 0,
	"price" : 999,
	},
	
	'p11' : { 
	"name" : "Навушники Hristos-Voskres K332",
	"count" : 0,
	"price" : 333,
	},
	
	'p12' : { 
	"name" : "Навушники JBL AM23",
	"count" : 0,
	"price" : 699,
	},
	
	
}; 




// созданая переменая необходимая для того, чтобы засунуть в неё локальную переменную, и сохранять при обновлении страницы
var cartm = 1; // cart money
var cartt = 1; // считает количество денег, прибавляя к себе при нажатии кнопки значение +1.
var cartp1 = 1; // считает количество товаров, прибавляя к себе при нажатии кнопки значение сумы товара.
var cart2 ;
var raz1;
var raz3;
var cartraz = "1";
var cartrz2 ;
var cartrz3;
var cartrz0;
/* var cart = {
	'p1' : 0,
	'p2' : 0,

}; */





document.onclick = event => {
	if (event.target.classList.contains('cart')){
		plusFunction(event.target.dataset.id);
	}
    if (event.target.classList.contains('cart')){
		plusMoneyFunction(event.target.dataset.id);
	}
	if (event.target.classList.contains('cart')){
		plusTovarFunction(event.target.dataset.id);
	}
	if (event.target.classList.contains('cart')){
		plusZinaFunction(event.target.dataset.id);
	}
	if (event.target.classList.contains('cart')){
		plusRazFunction(event.target.dataset.id);
	}
	if (event.target.classList.contains('delete')){
		deleteFunction(event.target.dataset.id);
	}
}

const plusMoneyFunction = id => {                    // добавляет суму обьектов которых хочешь добавить в корзину
	cartm = cartm + cart[id]['price'];
	
	renderCart();
	renderCart1();
	renderCart2();
	
	
	
}

const plusRazFunction = id => {                    // добавляет суму обьектов которых хочешь добавить в корзину
	cartraz = cart[id]['name'];
	
	renderCart();
	renderCart1();
	renderCart2();
	renderRaz();
	
	
}



const plusTovarFunction = id => {                  // вычесляет сколько добавлено товаров в корзину в общем
    var cart1 = localStorage.getItem("cartkey");
	var cart3 = localStorage.getItem("cartkey2");
	let num = Number(cart1);
	cartt = num + 1;
	localStorage.setItem("cartkey", cartt);
	
	renderCart();
	renderCart1();
	renderCart2();
	
    
	
}

const plusZinaFunction = id => {                  // 
    var cartZ = localStorage.getItem("cartkeyZ");
	var cartZ1 = localStorage.getItem("cartkeyZ1");
	let numZ = Number(cartZ);
	cartm = numZ + cart[id]['price'];
	localStorage.setItem("cartkeyZ", cartm);
	
	renderCart();
	renderCart1();
	renderCart2();
	
    
	
}

const plusFunction = id => {                          // 
	cartp1 = cartp1 + cart[id]['count'];

	
	renderCart();
	renderCart1();
	renderCart2(); 
	
    
}



const minusFunction = id => {                        
	if (cart[id]['count']-1 == 0){
		deleteFunction(id);
		return true;
	}
	cart[id]['count']--;
	
   
	renderCart();
	renderCart1();
	renderCart2();
	
	

}

const deleteFunction = id => {
    
    var cart1 = localStorage.getItem("cartkey");
	var cart3 = localStorage.getItem("cartkey2");
	let num = Number(cart1);
	cartt2 = num  * 0;
	localStorage.setItem("cartkey", cartt2);
	
	var cartZ = localStorage.getItem("cartkeyZ");
	var cartZ1 = localStorage.getItem("cartkeyZ1");
	let numZ = Number(cartZ);
	cartm2 = numZ * 0;
	localStorage.setItem("cartkeyZ", cartm2);
	
	var cartrz2 = localStorage.getItem("cartkeyrz7"); 
	cartrz2 = " ";
	localStorage.setItem("cartkeyrz7", cartrz2);
	
	
	
	renderCart();
	renderCart1();
	renderCart2();
	renderRaz();
}

          // вычесляет сколько добавлено товаров в корзину в общем



const renderRaz = () => {
	
	var cartrz2 = localStorage.getItem("cartkeyrz7"); 
	if (cartraz != 1) {
    cartrz0 = cartrz2 + cartraz +". " + "<br>";
	localStorage.setItem("cartkeyrz7", cartrz0);
  } 
  
     document.getElementById("tov3").innerHTML = cartrz2;
	
 }

/* const renderRaz = () => {
	 var cartrz1 = localStorage.getItem("cartkeyrz2");
	 localStorage.setItem("cartkeyrz1", cartrz1);
    document.getElementById("tov3").innerHTML = cartrz1;
 
	
 } */


 const renderCart1 = () => {
	 var cart1 = localStorage.getItem("cartkey");
	 let num2 = Number(cart1);
	 cart2 = num2 + 1;
	 localStorage.setItem("cartkey2", cart2);
	
    document.getElementById("tov1").innerHTML = cart1;
 
	
 }
renderCart1();
 

 
 const renderCart2 = () => {
	 var cartZ = localStorage.getItem("cartkeyZ");
	 let numZ = Number(cartZ);
	 cartZ3 = numZ + 1;
	 localStorage.setItem("cartkeyZ2", cartZ3);
	
    document.getElementById("tov2").innerHTML = cartZ;
	
 }
 
renderCart2();

   const renderCart = () => {
	console.log(cart);

}
renderCart();
 renderRaz();


/* $.post('index1.php', {text: 'Текст'}, function(data){
	echo(cartZ);
}); */


/* var cartZ = "search";
 $("input[type=text]").val(search); */


/* var cartZ = "search";
 
window.location.href="index.php?uid=1";  */
 
/* var mysql = require('mysql');

var con = mysql.createConnection({
  host: "127.0.0.1",
  user: "login",
  password: "",
  database: "ITdata"
}); */



