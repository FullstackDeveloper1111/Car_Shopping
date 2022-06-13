window.addEventListener('load', () => {
    var filterInput = document.querySelector('#filter-card');

    var filterCard = document.querySelectorAll('.card h6.model');

    filterInput.addEventListener('keyup', () => {
        let search = filterInput.value.toLowerCase();
        
            for (let i of filterCard) {
                let item = i.innerHTML.toLowerCase();
                console.log(item.indexOf(search));
                if (item.indexOf(search) == -1) {
                     i.parentElement.parentElement.style.display = 'none';
                 }
                else { 
                    i.parentElement.parentElement.style.display = '';
                }
                
            }

    })
    
})