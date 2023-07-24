const deleteButtons = document.querySelectorAll('.delete-btn');
  
deleteButtons.forEach((button) => {
  button.addEventListener('click', (event) => {
    const imgId = event.target.getAttribute('data-img-id');
    if(confirm('Opravdu chcete tento obrázek odstranit?')){
      fetch(`/doudis/config/delete_F.php?id=${imgId}`)
        .then(response => {
          if(response.ok){
            event.target.parentNode.remove();
          }else{
            alert('Nepodařilo se odstranit obrázek.');
          }
        })
        .catch(error => {
          console.error(error);
          alert('Došlo k chybě.');
        });
    }
  });
}); 