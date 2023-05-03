// Código JavaScript para mostrar opciones de búsqueda avanzada al hacer clic en el enlace correspondiente
var advancedSearchLink = document.querySelector(".advanced-search-link");
var advancedSearchOptions = document.querySelector(".advanced-search-options");

advancedSearchLink.addEventListener("click", function (event) {
  event.preventDefault();
  advancedSearchOptions.style.display = "block";
});
