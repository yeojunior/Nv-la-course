window.onscroll=function(){
  var navbar=document.getElementById("nabbb")
  if(window.pageYOffset>10){
      navbar.style.backgroundColor="#2a9df4";
  }else{
      navbar.style.backgroundColor='transparent';
  }
}





var typed = new Typed('#junioryeo', {
strings: ["NV LA COURSE :", "Votre satisfaction est notre engagement","Des chauffeurs professionnels à votre disposition"],
typeSpeed: 100,
backSpeed: 50,
loop: true,
showCursor: true,

});


// barre de recherche
//     function searchAndHighlight() {
//       alert('Search')
//         var word = document.getElementById('searchWord').value;
//         var paragraphs = document.getElementsByTagName("p");

//         for (var i = 0; i < paragraphs.length; i++) {
//             paragraphs[i].classList.remove("highlight"); // Supprimer la classe "highlight" de tous les paragraphes
//             if (paragraphs[i].innerText.includes(word)) {
//                 paragraphs[i].classList.add("highlight"); // Ajouter la classe "highlight" à l'élément contenant le mot
//                 paragraphs[i].scrollIntoView({ behavior: 'smooth', block: 'start' });
//                 break; // Sortir de la boucle une fois que l'élément est trouvé
//             }
//         }

//         if (i === paragraphs.length) {
//             alert("Le mot '" + word + "' n'a pas été trouvé dans la page.");
//         } else {
//             alert("Le mot '" + word + "' a été trouvé dans la page.");
//         }
//     }

// 

function searchAndHighlight() {
  var word = document.getElementById('searchWord').value.toLowerCase(); // Convertir le mot recherché en minuscules
  var paragraphs = document.querySelectorAll("p,h1,h2,h3,h4,h5,a,span");

  for (var i = 0; i < paragraphs.length; i++) {
      // paragraphs[i].classList.remove("highlight"); // Supprimer la classe "highlight" de tous les paragraphes
      if (paragraphs[i].innerText.toLowerCase().includes(word)) { // Convertir le texte en minuscules pour comparer
          paragraphs[i].classList.add("highlight"); // Ajouter la classe "highlight" à l'élément contenant le mot
          paragraphs[i].scrollIntoView({ behavior: 'smooth', block: 'start' });
          break; // Sortir de la boucle une fois que l'élément est trouvé
      }
  }

  if (i === paragraphs.length) {
      alert("Le mot '" + word + "' n'a pas été trouvé dans la page.");
  } else {
      alert("Le mot '" + word + "' a été trouvé dans la page.");
  }
}