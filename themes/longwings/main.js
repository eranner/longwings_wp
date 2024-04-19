
document.addEventListener('DOMContentLoaded', ()=> {
   console.log('event')
    let donorbox = document.querySelector('.dbox-reminder-widget')

    if(donorbox){
        donorbox.style.display = 'none';
        console.log('detected')
    }
})
