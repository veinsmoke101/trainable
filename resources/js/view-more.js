const viewMore = document.querySelectorAll('.post__more')

viewMore.forEach( button => {
    button.addEventListener('click', () => {
            button.parentElement.querySelector('.update-delete').classList.toggle('active');
        }
    )
});
