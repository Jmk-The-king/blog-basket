let categorieTitre = document.querySelector('.titre-categorie')
let categorieList = document.querySelector('liste-categorie')

categorieTitre.addEventListener('click', () => {
    categorieList.classList.remove('active')
})